<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Orderitem;
use App\Models\shipping;
use Illuminate\Support\Facades\Session;
class OrderControlle extends Controller
{
    // place order
    public function placeOrder(Request $request) {
        $order_id=Order::insertGetId([
            'user_id'=>Auth::user()->id,
            'invoice_no'=>mt_rand(10000000,99999999),
            'total'=>$request->total,
            'subtotal'=>$request->subtotal,
            'payment_type'=>$request->payment_type,
            'coupon_discount'=>$request->coupon_discount,
            'created_at'=>Carbon::now(),
        ]);

        $carts=Cart::where('user_ip',request()->ip())->get();
        foreach($carts as $cart){
            Orderitem::insert([
                'order_id'=>$order_id,
                'product_id'=>$cart->product_id,
                'qty'=>$cart->qty,
                'product_name'=>$cart->product->name,
                'created_at'=>Carbon::now(),
            ]);
        }

        shipping::insert([
            'order_id'=>$order_id,
            'shipping_first_name'=>$request->shipping_first_name,
            'shipping_last_name'=>$request->shipping_last_name,
            'shipping_email'=>$request->shipping_email,
            'shipping_phone'=>$request->shipping_phone,
            'address'=>$request->address,
            'state'=>$request->state,
            'city'=>$request->city,
            'post_code'=>$request->post_code,
            'country'=>$request->country,
            'created_at'=>Carbon::now(),
        ]);
        // if($request->payment_type=='cash'){
        //     Cart::where('user_ip',request()->ip())->delete();
        //     return redirect()->route('home')->with('success','Order Placed Successfully');
        // }else{
        //     $notification=array('messege' => 'Payment Method Not Found', 'alert-type' => 'error');
        //     return redirect()->back()->with($notification);
        // }
    // Payment Start
        if($request->payment_type=='aamarpay'){

        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
        $fields = array(
            'store_id' => env('STORE_ID'), //store id will be aamarpay,  contact integration@aamarpay.com for test/live id
            'amount' => $request->subtotal, //transaction amount
            'payment_type' => 'VISA', //no need to change
            'currency' => 'BDT',  //currenct will be USD/BDT
            'tran_id' => rand(1111111,9999999), //transaction id must be unique from your end
            'cus_name' => $request->shipping_first_name ."".$request->shipping_last_name,  //customer name
            'cus_email' => $request->shipping_email, //customer email address
            'cus_add1' => 'Dhaka',  //customer address
            'cus_add2' => 'Mohakhali DOHS', //customer address
            'cus_city' => $request->city,  //customer city
            'cus_state' => $request->state,  //state
            'cus_postcode' => $request->post_code, //postcode or zipcode
            'cus_country' => $request->country,  //country
            'cus_phone' => $request->shipping_phone, //customer phone number
            'cus_fax' => 'Not¬Applicable',  //fax
            'ship_name' => $request->shipping_first_name ."".$request->shipping_last_name, //ship name
            'ship_add1' => $request->address,  //ship address
            'ship_add2' => 'Mohakhali',
            'ship_city' => $request->city,
            'ship_state' => $request->state,
            'ship_postcode' => $request->post_code,
            'ship_country' =>  $request->country,
            'desc' => 'payment description',
            'success_url' => route('success'), //your success route
            'fail_url' => route('fail'), //your fail route
            'cancel_url' => 'http://localhost/foldername/cancel.php', //your cancel url
            'signature_key' => env('SIGNATURE_KEY')  //signature key will provided aamarpay, contact
        ); //signature key will provided aamarpay, contact integration@aamarpay.com for test/live signature key

        $fields_string = http_build_query($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));
        curl_close($ch);

        $this->redirect_to_merchant($url_forward);

        if(Session::has('coupon')){
            Session::forget('coupon');
        }

        Cart::where('user_ip',request()->ip())->delete();
        return redirect()->route('order.success')->with('success','Order Placed Successfully');

    }
    // Payment End

    }

    function orderSuccess() {
        return view('frontend.order_success');
    }

    // payment Amar Pay

    function redirect_to_merchant($url) {

        ?>
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head><script type="text/javascript">
            function closethisasap() { document.forms["redirectpost"].submit(); }
          </script></head>
          <body onLoad="closethisasap();">

            <form name="redirectpost" method="post" action="<?php echo 'https://sandbox.aamarpay.com/'.$url; ?>"></form>
            <!-- for live url https://secure.aamarpay.com -->
          </body>
        </html>
        <?php
        exit;
    }


    public function success(Request $request){
        $data = [];
        $data[] = $request->all();
        return view('frontend.order_success', compact('data'));
    }

    public function fail(Request $request){
        return $request;
    }
}
