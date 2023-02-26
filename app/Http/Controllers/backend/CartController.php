<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    function addToCart(Request $request,$product_id)
    {
        $qty = Cart::where('product_id',$product_id)->first();
        if($qty)
        {
            Cart::where('product_id',$product_id)->increment('qty');
            return redirect()->back()->with('success','Product Added to Cart Successfully');
        }
        Cart::insert([
            'product_id' => $product_id,
            'qty' => $request->qty ? $request->qty : 1,
            'price' => $request->price ? $request->price : 0,
            'user_ip' => $request->ip(),
        ]);

        $notification=array('messege' => 'Cart Added', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    // Cart Page
    public function CartPageShow() {
        $carts = Cart::where('user_ip',request()->ip())->with("product")->latest()->get();
        return view("frontend.cart",compact('carts'));
    }

    // Cart item delete

    public function CartItemDelete($id) {
        Cart::findOrFail($id)->delete();
        $notification=array('messege' => 'Cart Deleted', 'alert-type' => 'error');
        return redirect()->back()->with($notification);
    }

    // Coupon Apply

    public function CouponApply(Request $request) {
        $coupon = Coupon::where('code',$request->coupon)->first();
        if($coupon) {
            Session::put('coupon',[
                'code' => $coupon->code,
                'type' => $coupon->type,
                'value' => $coupon->value,
            ]);

            $notification=array('messege' => 'Coupon Applied', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        } else {
            $notification=array('messege' => 'Invalid Coupon', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }

    public function couponDistroy() {
        if(Session::has('coupon')){
            Session::forget('coupon');
            $notification=array('messege' => 'Coupon Removed', 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
