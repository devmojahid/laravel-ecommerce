<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\AuthMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class AuthController extends Controller
{

    // User Login Page
    public function userLogin() {
        return view("frontend.auth.login");
    }

    // User Login Store
    public function userLoginStore(Request $request) {
        $creadential = [
            'email'=>$request->email,
            'password'=>$request->password,
            'status'   =>"active"
        ];

        if(Auth::attempt($creadential)){
            if(Auth::guard('web')->user()->role == "1" ){
                return redirect()->route("dashboard")->with("login Admin");
            }else{
                return redirect()->route("user.account")->with("success","User Login");
            }

        }else{
            return redirect()->route("user.login")->with("error","Somthing Is Wrong");
        }
    }

    // User Register Page
    public function userRegister() {
        return view("frontend.auth.register");
    }


    // User Register Store
    public function userRegisterStore(Request $request) {
        $token = hash("sha256",time());
        $email_exist=User::where("email",$request->email)->first();
        if(!$email_exist){
            $user =  User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password),
                'status'  => "panding",
                'token' => $token
            ]);
            $varification_link = url('registration/verify/'.$token.'',$request->email);
            $subject = "Register Confarmetion";
            $body = "Please Click The Link Bello <br/> <a href='".$varification_link."' >CLick Hear</a>";
            Mail::to($request->email)->send(new AuthMail($subject,$body));
            echo "Email Submited";
        }
     return redirect()->back()->with("error","Email Already Exist");
    }

    public function userRegisterverify($token,$email) {
        $user =  User::where(['token'=>$token,"email"=>$email])->first();
        if(!$user){
            return redirect()->route("user.register")->with("error","token Invalid");
        }
        $user->update([
            'token' => "",
            'status' =>"active"
        ]);
        return redirect()->route("user.account")->with("success","Verification Successfull");
    }

    // User Account Page
    public function userLogout() {
        Auth::guard('web')->logout();
        return redirect()->route('user.login')->with("success","logout");
    }

    // User Account Page
    public function userAcoount() {
        return view("frontend.auth.account");
    }

    // User Forgot Password Page
    public function userForgotPass() {
        return view("frontend.auth.forgot-password");
    }

    // User Forgot Password Store
    public function userForgotPassStore(Request $request) {
        $token = hash("sha256",time());
        $user =  User::where("email",$request->email)->first();
        if(!$user){
            return redirect()->back()->with("error","Email Not FOund");
        }
        $user->update([
            'token' => $token
        ]);

        $varification_link = url('reset-password/'.$token.'',$request->email);
        $subject = "Reset Password";
        $body = "Reset Your Password To CLick Bellow </br> <a href='".$varification_link."'>Reset Pass</a>";
        Mail::to($request->email)->send(new AuthMail($subject,$body));

        return redirect()->route("user.login");

    }

    // Reset Password

    public function userResetPassword($token,$email) {
        $user = User::where(['token'=>$token,'email'=>$email])->first();
        if(!$user){
            echo "User Not Found";
        }else{

        return view("frontend.auth.reset-password",compact('token','email'));
        }
    }

    // Reset Password Store

    public function userResetPasswordStore(Request $request) {
        $user = User::where(['token'=>$request->token,'email'=>$request->email])->first();
        if(!$user){
            echo "User Not Found";
        }else{
        $password = Hash::make($request->new_password);
        $user->update([
            'token' =>"",
            'password'=>$password
        ]);

        return redirect()->route("user.login")->with("success",'password reset successfull');
    }

    }
}
