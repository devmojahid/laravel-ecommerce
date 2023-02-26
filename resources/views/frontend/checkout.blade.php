@extends('frontend.app')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    @php
        $total_price = 0;
    @endphp
    <div class="container mb-80 mt-50">
        <form method="post" action="{{ route("place.order") }}">
            @csrf
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Checkout</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">

                    <div class="row">
                        <h4 class="mb-30">Sipping Address</h4>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input value="{{ Auth::user()->name }}" type="text" name="shipping_first_name" placeholder="First name *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" value="{{ Auth::user()->name }}" name="shipping_last_name" placeholder="Last name *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <input type="text" name="address" required="" placeholder="Address *">
                            </div>
                            <div class="form-group col-lg-4">
                                <input type="text" name="state" required="" placeholder="State">
                            </div>
                            <div class="form-group col-lg-4">
                                <input type="text" name="country" required="" placeholder="State">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="" value="{{ Auth::user()->name }}" type="email" name="shipping_email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="city" placeholder="city">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="post_code" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="shipping_phone" placeholder="Phone *">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h4>Your Order</h4>
                            <h6 class="text-muted">Subtotal</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            <table class="table no-border">
                                <tbody>
                                    @php
                                        $subtotal = 0;
                                        $almost_total = 0;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        <tr>
                                            <td class="image product-thumbnail"><img
                                                    src="{{ asset('storage/' . $cart->product->thumbnail) }}" alt="#">
                                            </td>
                                            <td>
                                                <h6 class="w-160 mb-5"><a
                                                        href="{{ route('single-page', $cart->product->slug) }}"
                                                        class="text-heading">{{ $cart->product->name }}</a></h6></span>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="text-muted pl-20 pr-20">x {{ $cart->qty }}</h6>
                                            </td>
                                            <td>
                                                <h4 class="text-brand">$ {{ $cart->product->price }}</h4>
                                            </td>
                                        </tr>
                                        @php
                                            $subtotal = $cart->product->price * $cart->qty;
                                            $almost_total += $subtotal;
                                        @endphp
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h4>Subtotal</h4>
                                        </td>

                                        <td>
                                            <h4 class="text-brand">$ {{ $almost_total }}</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h4>Total</h4>
                                        </td>

                                        <td>

                                            @if (Session::has('coupon'))
                                                @php
                                                    $total_price = $almost_total - session()->get('coupon')['value'];
                                                @endphp
                                                <h4 class="text-brand">$ {{ $total_price }}</h4>

                                            <input type="hidden" name="coupon_discount" value="{{  session()->get('coupon')['value'] }}">

                                            @endif
                                            <input type="hidden" name="subtotal" value="{{ $almost_total }}" id="">
                                            <input type="hidden" name="total" value="{{ $total_price }}">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="payment ml-30">
                        <h4 class="mb-30">Payment</h4>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" value="bank" name="payment_type"
                                    id="exampleRadios3">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse"
                                    data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input"  name="payment_type" value="cod" required="" type="radio"
                                    id="exampleRadios4">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse"
                                    data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>

                            <div class="custome-radio">
                                <input class="form-check-input"  name="payment_type" checked value="aamarpay" required="" type="radio"
                                    id="exampleRadios4">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse"
                                    data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="{{ asset('frontend') }}/assets/imgs/theme/icons/payment-paypal.svg"
                                alt="">
                            <img class="mr-15" src="{{ asset('frontend') }}/assets/imgs/theme/icons/payment-visa.svg"
                                alt="">
                            <img class="mr-15" src="{{ asset('frontend') }}/assets/imgs/theme/icons/payment-master.svg"
                                alt="">
                            <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/payment-zapper.svg" alt="">
                        </div>
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Place an Order<i
                                class="fi-rs-sign-out ml-15"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
