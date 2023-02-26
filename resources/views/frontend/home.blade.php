@extends("frontend.app")

@section("content")

    <section class="home-slider position-relative mb-30">
        <div class="container">
            <div class="home-slide-cover mt-30">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                    @php
                        $sliders = App\Models\Slider::orderBy("id","ASC")->take(4)->get();
                    @endphp
                    @foreach ($sliders as $slider)
                    <div class="single-hero-slider single-animation-wrap" style="background-color:{{ $slider->background_color }}">
                        <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                {{$slider->title}}
                            </h1>
                            <p class="mb-65">{{ $slider->description }}</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </div>
        </div>
    </section>
    <!--End hero slider-->
    <section class="popular-categories section-padding">
        <div class="container wow animate__animated animate__fadeIn">
            <div class="section-title">
                <div class="title">
                    <h3>Featured Categories</h3>
                </div>
                <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
            </div>
            <div class="carausel-10-columns-cover position-relative">
                <div class="carausel-10-columns" id="carausel-10-columns">
                    @foreach ($featuredcategories as $featuredcategories)
                    <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="{{ route('categories.products',$featuredcategories->slug) }}"> <img src="{{ asset("storage/".$featuredcategories->photo) }}"  alt="" /></a>
                        </figure>
                        <h6><a href="{{ route('categories.products',$featuredcategories->slug) }}">{{ $featuredcategories->title }}</a></h6>
                        <span>{{ count($featuredcategories->products) }}</span>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--End category slider-->
    <section class="banners mb-25">
        <div class="container">
            <div class="row">
                @php
                    $ads = App\Models\Ad::orderBy("id","ASC")->take(3)->get();
                @endphp
                @foreach ($ads as $ad)
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <img src="{{asset('storage/'.$ad->image)}}" alt="" />
                        <div class="banner-text">
                            <h4>
                                {{ $ad->title }}
                            </h4>
                            <a href="{{ $ad->url }}" class="btn btn-xs">{{ $ad->link_text }} <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End banners-->

    @php
         $popular_product = \App\Models\Product::with('category')->orderBy("id","desc")->get();
    @endphp

    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Popular Products</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">



                    <div class="row product-grid-4">
                        @foreach ($popular_product as $product)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route("single-page",$product->slug) }}">
                                            <img class="default-img" src="{{ asset("storage/".$product->thumbnail) }}" alt="" />
                                            <img class="hover-img" src="{{ asset("storage/".$product->thumbnail) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">{{ $product->category->title }}</a>
                                    </div>
                                    <h2><a href="{{ route("single-page",$product->slug) }}">{{ $product->name }}</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>{{ $product->discount }}</span>
                                            <span class="old-price">{{ $product->price }}</span>
                                        </div>
                                        <div class="add-cart">
                                            <form method="POST" action="{{ route("add-to-cart",$product->id) }}">
                                                @csrf
                                                <input type="hidden" value="{{ $product->price }}">
                                                <button class="btn btn-primary" href="{{ route("cart-page") }}"><i class="fi-rs-shopping-cart mr-5"></i>Add
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <!--End product-grid-4-->
                </div>


            </div>
            <!--End tab-content-->
        </div>
    </section>




    <!--Products Tabs-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="">Discount Product</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                    <div class="banner-img style-2">
                        <div class="banner-text">
                            <h2 class="mb-100">Bring nature into your home</h2>
                            <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @php
                                        $products = App\Models\Product::where('discount','!=',NULL)->orderBy('id','DESC')->get();
                                    @endphp
                                    @foreach ($products as $product)
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route("single-page",$product->slug) }}">
                                                    <img class="default-img" src="{{ asset('storage/'.$product->thumbnail) }}" alt="" />
                                                    <img class="default-img" src="{{ asset('storage/'.$product->thumbnail)  }}" alt="" />
                                                    <img class="hover-img" src="{{ asset('storage/'.$product->thumbnail)  }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ (100-$product->discount) }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">{{ $product->category_id }}</a>
                                            </div>
                                            <h2><a href="{{ route("single-page",$product->slug) }}">{{ $product->name }}</a></h2>
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                            <div class="product-price mt-10">
                                                <span>{{ $product->discount }} </span>
                                                <span class="old-price">{{ $product->price }}</span>
                                            </div>
                                            {{-- <div class="sold mt-15 mb-15">
                                                <div class="progress mb-5">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="font-xs text-heading"> Sold: 90/120</span>
                                            </div> --}}
                                            <form method="POST" action="{{ route("add-to-cart",$product->id) }}">
                                                @csrf
                                                <input type="hidden" value="{{ $product->price }}">
                                                <button class="add btn btn-primary" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    <!--End Best Sales-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">Deals Of The Day</h3>
                <a class="show-all" href="shop-grid-right.html">
                    All Deals
                    <i class="fi-rs-angle-right"></i>
                </a>
            </div>
            <div class="row">
                @php
                    $blogs = App\Models\Blog::latest()->take(4)->get();
                @endphp
                @foreach ($blogs as $blog)

                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="{{ route('single.blog',$blog->slug) }}">
                                    <img class="border-radius-15" src="{{ asset("storage/".$blog->image) }}" alt="" />
                                </a>
                                <div class="entry-meta">
                                    <a class="entry-meta meta-2" href="blog-category-grid.html"><i
                                            class="fi-rs-heart"></i></a>
                                </div>
                            </div>
                            <div class="entry-content-2">
                                <h6 class="mb-10 font-sm"><a class="entry-meta text-muted"
                                        href="{{ route('single.blog',$blog->slug) }}">{{ $blog->category->title }}</a></h6>
                                <h4 class="post-title mb-15">
                                    <a href="{{ route('single.blog',$blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">{{ date("d-m-y", strtotime($blog->created_at)) }}</span>
                                        <span class="hit-count has-dot mr-10">126k Views</span>
                                        <span class="hit-count has-dot">4 mins read</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

            </div>
        </div>
    </section>
    <!--End Deals-->
    <section class="section-padding mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <h4 class="section-title style-1 mb-30 animated animated">Old Product</h4>
                    <div class="product-list-small animated animated">
                        @php
                            $top_prices = \App\Models\Product::orderBy('price','desc')->take(4)->get();
                            $low_prices = \App\Models\Product::orderBy('price','asc')->take(4)->get();
                            $old_added = \App\Models\Product::orderBy('id','asc')->take(4)->get();
                            $recently_added = \App\Models\Product::orderBy('id','desc')->take(4)->get();

                        @endphp
                        @foreach ($old_added as $product)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ route('single-page',$product->slug) }}"><img src="{{asset("storage/".$product->thumbnail)}}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ route('single-page',$product->slug) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>{{ $product->price }}</span>
                                    <span class="old-price">{{ $product->discount }}</span>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="section-title style-1 mb-30 animated animated">Trending Products</h4>
                    <div class="product-list-small animated animated">
                        @foreach ($low_prices as $product)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ route('single-page',$product->slug) }}"><img src="{{asset("storage/".$product->thumbnail)}}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ route('single-page',$product->slug) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>{{ $product->price }}</span>
                                    <span class="old-price">{{ $product->discount }}</span>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                    <div class="product-list-small animated animated">
                        @foreach($recently_added as $product)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ route('single-page',$product->slug) }}"><img src="{{asset("storage/".$product->thumbnail)}}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ route('single-page',$product->slug) }}">{{ $product->name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>{{ $product->price }}</span>
                                    <span class="old-price">{{ $product->discount }}</span>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="section-title style-1 mb-30 animated animated">Top Prices</h4>
                    <div class="product-list-small animated animated">
                        @foreach ($top_prices as $top_price)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ route('single-page',$top_price->slug) }}"><img src="{{asset("storage/".$top_price->thumbnail)}}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ route('single-page',$top_price->slug) }}">{{ $top_price->name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 4 columns-->

@endsection
