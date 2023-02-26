<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.settings.index',compact('setting'));
    }

    function update(Request $request){
        $logo_path = "";
        if($request->hasFile('logo')){
            $logo_path = $request->file('logo')->store('uploads/logo','public');
        }
        $favicon_path = "";
        if($request->hasFile('favicon')){
            $favicon_path = $request->file('favicon')->store('uploads/logo','public');
        }
        $setting = Setting::first();
        $setting->update([
            'logo'=> $logo_path,
            'favicon'=> $favicon_path,
            'currency'=> $request->currency,
            'currency_symbol'=> $request->currency_symbol,
            'phone'=> $request->phone,
            'phone2'=> $request->phone2,
            'email'=> $request->email,
            'support_email'=> $request->support_email,
            'address'=> $request->address,
            'city'=> $request->city,
            'facebook'=> $request->facebook,
            'twitter'=> $request->twitter,
            'instagram'=> $request->instagram,
            'linkedin'=> $request->linkedin,
            'youtube'=> $request->youtube,
        ]);

        $notification = array(
            'message' => 'Settings Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
}
