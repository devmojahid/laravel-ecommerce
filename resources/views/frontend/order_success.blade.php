@extends('frontend.app')

@section("content")
 <div class="container m-5">
    <div class="row">
        <div class="col-md-6" style="margin:0 auto;">
            <h1>Order Successfully placed</h1>
            <h2 style="color:blue; font:bold; font-size:30px">Hi {{ $data[0]["cus_name"] }}</h2>
            <p>Thank you for your order. Your order has been placed successfully. You will receive an email confirmation shortly.</p>
        </div>
    </div>
 </div>
@endsection
