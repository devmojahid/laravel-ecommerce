<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Final Ecomm</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/'.get_settings('favicon')) }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css?v=5.6" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendors/toastr.min.css" />

</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><a href="{{ route("user.account") }}">Account</a></li>
                                <li><a href="{{ route('wishlist-page') }}">Wishlist</a></li>
                                <li><a href="{{ route("user.account") }}">Order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">

                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>Need help? Call Us: <strong class="text-brand"> {{ get_settings('phone') }} </strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $categories = App\Models\Category::where('status', 1)->take(10)->get();
        @endphp
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ route("home-page") }}"><img width="100%" height="100%" src="{{ asset('storage/'.get_settings('logo')) }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    @foreach ($categories as $category)
                                        <option>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="{{ route('wishlist-page') }}">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-heart.svg" />
                                        <span class="pro-count blue">6</span>
                                    </a>
                                    <a href="{{ route('wishlist-page') }}"><span class="lable">Wishlist</span></a>
                                </div>
                                @php
                                $carts = App\Models\Cart::with("product")->where('user_ip', request()->ip())->get();
                                $carts_count = count($carts);
                                $total = 0;
                                @endphp
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route("cart-page") }}">
                                        <img alt="Nest"
                                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count blue">{{ $carts_count }}</span>
                                    </a>
                                    <a href="{{ route("cart-page") }}"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>

                                            @foreach ($carts as $cart)


                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest"
                                                            src="{{ asset('storage/'.$cart->product->thumbnail) }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="{{ $cart->product->slug }}">{{ $cart->product->name }}</a></h4>
                                                    <h4><span>1 × </span>{{ $cart->product->price }}</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>

                                            @php
                                                $total = $total + $cart->product->price;
                                            @endphp
                                            @endforeach
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>${{ $total }}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{ route('cart-page') }}" class="outline">View cart</a>
                                                <a href="{{ route('checkout-page') }}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-user.svg" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            @if(!Auth::guard("web")->user())
                                            <li>
                                                <a href="{{ route('user.login') }}"><i class="fi fi-rs-user mr-10"></i>
                                                    Login</a>
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ route('user.account') }}"><i class="fi fi-rs-user mr-10"></i>My
                                                    Account</a>
                                            </li>
                                            @endif
                                            <li>
                                                <a href="{{ route("user.logout") }}"><i class="fi fi-rs-sign-out mr-10"></i>Sign
                                                    out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{ route("home-page") }}"><img src="{{ asset('storage/'.get_settings('logo')) }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span> <span class="et">All Categorys</span>
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>

                                        @foreach ($categories as $category)
                                        <li><a href="{{ $category->slug }}"> <img src="{{ asset("storage/".$category->photo) }}"
                                                    alt="" />{{ $category->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="active" href="{{ route("home-page") }}">Home </a>
                                    </li>
                                    <li>
                                        <a href="page-contact.html">Contact</a>
                                    </li>
                                    <li><a href="{{ route('shop-page') }}">Shop</a></li>
                                    <li><a href="{{ route('cart-page') }}">Cart</a></li>
                                    <li><a href="{{ route('blog.page') }}">Blog</a></li>
                                    @if(!Auth::guard("web")->user())
                                    <li><a href="{{ route("user.login") }}">Login</a></li>
                                    <li><a href="{{ route('user.register') }}">Register</a></li>
                                    @else
                                    <li><a href="{{ route("user.account") }}">My Account</a></li>
                                    <li><a href="{{ route("user.logout") }}">Logout</a></li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="{{ route('wishlist-page') }}">
                                    <img alt="Nest"
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest"
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest"
                                                        src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-3.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest"
                                                        src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-4.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ route("cart-page") }}">View cart</a>
                                            <a href="{{ route("checkout-page") }}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ route("home-page") }}"><img src="{{ asset('storage/'.get_settings('logo')) }}"
                            alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="{{ route('home-page') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('shop-page') }}">Shop</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('cart-page') }}">Cart</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('blog.page') }}">Blog</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img
                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-facebook-white.svg"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-twitter-white.svg"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-instagram-white.svg"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-pinterest-white.svg"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-youtube-white.svg"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
