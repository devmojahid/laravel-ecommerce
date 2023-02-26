<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\shipping;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\product;
use App\Models\Cart;
class checkoutControlle extends Controller
{
     // Shop Page
     public function checkoutPageShow() {
        if(Auth::check()){
            $carts = Cart::with('product')->orderBy("id","desc")->get();
            return view("frontend.checkout",compact('carts'));
        }else{
            $notification = array('messege' => 'Please Login First', 'alert-type' => 'error');
            return redirect()->route("user.login")->with($notification);
        }

    }

    
}
