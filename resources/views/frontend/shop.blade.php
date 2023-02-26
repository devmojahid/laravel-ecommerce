@extends('frontend.app')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <div class="container mb-30" style="transform: none;">
        <div class="row flex-row-reverse" style="transform: none;">
            <div class="col-lg-4-5">
                <div class="shop-product-fillter">
                    <div class="totall-product">
                        @php
                            $product_count = count($allproducts);
                        @endphp
                        <p>We found <strong class="text-brand">{{ $product_count }}</strong> items for you!</p>
                    </div>

                    @if ($product_count < 1)
                        <h1 class="d-flex align-content-center justify-content-center text-bold font-bold text-danger mt-5">
                            No Product Found</h1>
                    @endif



                    <div class="sort-by-product-area">
                        <div class="sort-by-cover mr-10">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps"></i>Show:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">50</a></li>
                                    <li><a href="#">100</a></li>
                                    <li><a href="#">150</a></li>
                                    <li><a href="#">200</a></li>
                                    <li><a href="#">All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sort-by-cover">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Featured</a></li>
                                    <li><a href="#">Price: Low to High</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                    <li><a href="#">Release Date</a></li>
                                    <li><a href="#">Avg. Rating</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row product-grid">
                    @foreach ($allproducts as $product)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('single-page', $product->slug) }}">
                                            <img class="default-img" src="{{ asset('storage/' . $product->thumbnail) }}"
                                                alt="">
                                            <img class="hover-img" src="{{ asset('storage/' . $product->thumbnail) }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a
                                            href="{{ route('categories.products', $product->category->slug) }}">{{ $product->category->title }}</a>
                                    </div>
                                    <h2><a href="{{ route('single-page', $product->slug) }}">{{ $product->name }}</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>{{ $product->discount }}</span>
                                            <span class="old-price">{{ $product->price }}</span>
                                        </div>
                                        <div class="add-cart">
                                            <form method="POST" action="{{ route('add-to-cart', $product->id) }}">
                                                @csrf
                                                <input type="hidden" value="{{ $product->price }}">
                                                <button class="btn btn-primary" href="shop-cart.html"><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--end product card-->
                </div>
                <!--product grid-->
                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            {{-- <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li> --}}
                            {{ $allproducts->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1-5 primary-sidebar sticky-sidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                <!-- Fillter By Price -->

                <!-- Product sidebar Widget -->


                <div class="theiaStickySidebar"
                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px;">
                    <div class="sidebar-widget widget-category-2 mb-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            <li>
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/category-1.svg"
                                        alt="">Milks &amp; Dairies</a><span class="count">0</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/category-2.svg"
                                        alt="">Clothing</a><span class="count">0</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/category-3.svg"
                                        alt="">Pet Foods </a><span class="count">1</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/category-4.svg"
                                        alt="">Baking material</a><span class="count">1</span>
                            </li>
                            <li>
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/category-5.svg"
                                        alt="">Fresh Fruit</a><span class="count">2</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget price_range range mb-30">
                        <h5 class="section-title style-1 mb-30">Fill by price</h5>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range" class="mb-20 noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    <div class="noUi-base">
                                        <div class="noUi-origin noUi-connect" style="left: 25%;">
                                            <div class="noUi-handle noUi-handle-lower"></div>
                                        </div>
                                        <div class="noUi-origin noUi-background" style="left: 50%;">
                                            <div class="noUi-handle noUi-handle-upper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="caption">From: <strong id="slider-range-value1"
                                            class="text-brand">$500</strong></div>
                                    <div class="caption">To: <strong id="slider-range-value2"
                                            class="text-brand">$1,000</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Color</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox2" value="">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>Green
                                            (78)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Blue
                                            (54)</span></label>
                                </div>
                                <label class="fw-900 mt-15">Item Condition</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox11" value="">
                                    <label class="form-check-label" for="exampleCheckbox11"><span>New
                                            (1506)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox21" value="">
                                    <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                            (27)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox31" value="">
                                    <label class="form-check-label" for="exampleCheckbox31"><span>Used
                                            (45)</span></label>
                                </div>
                            </div>
                        </div>
                        <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                            Fillter</a>
                    </div>
                    <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                        <h5 class="section-title style-1 mb-30">New products</h5>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-3.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                                <p class="price mb-0 mt-5">$99.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-4.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                                <p class="price mb-0 mt-5">$89.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-5.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                                <p class="price mb-0 mt-5">$25</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none animated"
                        style="visibility: visible;">
                        <img src="{{ asset('frontend') }}/assets/imgs/banner/banner-11.png" alt="">
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br>
                                on <span class="text-brand">Oganic</span><br>
                                Juice
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
