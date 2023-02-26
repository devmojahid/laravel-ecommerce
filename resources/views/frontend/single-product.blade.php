@extends('frontend.app')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> <a href="shop-grid-right.html">Vegetables &amp; tubers</a> <span></span> Seeds of Change
                Organic
            </div>
        </div>
    </div>

    <div class="container mb-30">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50 mt-30">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <img height="600" width="600" src="{{ asset("storage/".$singleproduct->thumbnail) }}" alt="">
                                <!-- END MAIN SLIDES -->
                            </div>
                            <div>
                                @php
                                    // Explode the images
                                    $images = explode("|", $singleproduct->photos);
                                @endphp
                                <div class="row">
                                    @foreach ($images as $img)
                                    <div class="col-md-3">
                                        <img height="100%" width="100%" src="{{ asset("storage/".$img) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h2 class="title-detail">{{ $singleproduct->name }}</h2>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">{{ $singleproduct->discount }}</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">{{ $singleproduct->price }}</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="short-desc mb-30">
                                    <p class="font-lg">{{ $singleproduct->summary }}</p>
                                </div>

                                <div class="attr-detail attr-size mb-30">
                                    <strong class="mr-10">Weight: </strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">{{ $singleproduct->weight }}</a></li>
                                    </ul>
                                </div>

                                <div class="attr-detail attr-size mb-30">
                                    <strong class="mr-10">Color: </strong>
                                    <ul class="list-filter size-filter font-small">
                                        <div
                                            style="
                                            width: 25px;
                                            height: 25px;
                                            background: {{ $singleproduct->color->code }};
                                            border-radius: 50%;
                                            margin: 0 auto;
                                        ">
                                        </div>
                                    </ul>
                                </div>

                                <div class="detail-extralink mb-50">
                                    <form action="{{ route("add-to-cart",$singleproduct->id) }}" method="POST">
                                        @csrf
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="number" name="qty" class="qty-val" placeholder="1"
                                                min="1">
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart"><i
                                                    class="fi-rs-shopping-cart"></i>Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="font-xs">
                                    <ul class="mr-50 float-start">
                                        <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                        <li>LIFE: <span class="text-brand">70 days</span></li>
                                    </ul>
                                    <ul class="float-start">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a
                                                href="#" rel="tag">Organic</a>, <a href="#"
                                                rel="tag">Brown</a></li>
                                        <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab"
                                        href="#Vendor-info">Video & Audio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews
                                        (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div>
                                        <p>{{ $singleproduct->description }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Additional-info">
                                    <table class="font-md">
                                        <tbody>

                                            <tr class="stand-up">
                                                <th>Color</th>
                                                <td>
                                                    <p>
                                                    <div
                                                        style="
                                                        width: 25px;
                                                        height: 25px;
                                                        background: {{ $singleproduct->color->code }};
                                                        border-radius: 50%;
                                                    ">
                                                    </div>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Weight</th>
                                                <td>
                                                    <p>{{ $singleproduct->weight }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Brand</th>
                                                <td>
                                                    <p>{{ $singleproduct->brand->name }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Category</th>
                                                <td>
                                                    <p>{{ $singleproduct->category->title }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Barcode</th>
                                                <td>
                                                    <p>{{ $singleproduct->barcode }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Stock</th>
                                                <td>
                                                    <p>{{ $singleproduct->stock }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Weight</th>
                                                <td>
                                                    <p>{{ $singleproduct->weight }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Vat</th>
                                                <td>
                                                    <p>{{ $singleproduct->vat }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Tax</th>
                                                <td>
                                                    <p>{{ $singleproduct->tax }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Video Link</th>
                                                <td>
                                                    <p>{{ $singleproduct->product_video_link }}</p>
                                                </td>
                                            </tr>

                                            <tr class="stand-up">
                                                <th>Audio Link</th>
                                                <td>
                                                    <p>{{ $singleproduct->product_audio_link }}</p>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Vendor-info">

                                    <h4>Video</h4>
                                    <video style="margin:0 auto" width="900" height="400" controls>
                                        <source src="{{ $singleproduct->product_video_link }}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>

                                    <h4>Audio</h4>
                                    <audio controls>
                                        <source src="{{ $singleproduct->product_audio_link }}" type="audio/ogg">
                                        <source src="{{ $singleproduct->product_audio_link }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>



                                </div>
                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions &amp; answers</h4>
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex mb-30">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('frontend') }}/assets/imgs/blog/author-2.png"
                                                                    alt="">
                                                                <a href="#"
                                                                    class="font-heading text-brand">Sienna</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022
                                                                            at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing elit. Delectus, suscipit exercitationem
                                                                    accusantium obcaecati quos voluptate nesciunt facilis
                                                                    itaque modi commodi dignissimos sequi repudiandae minus
                                                                    ab deleniti totam officia id incidunt? <a
                                                                        href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('frontend') }}/assets/imgs/blog/author-3.png"
                                                                    alt="">
                                                                <a href="#"
                                                                    class="font-heading text-brand">Brenna</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022
                                                                            at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 80%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing elit. Delectus, suscipit exercitationem
                                                                    accusantium obcaecati quos voluptate nesciunt facilis
                                                                    itaque modi commodi dignissimos sequi repudiandae minus
                                                                    ab deleniti totam officia id incidunt? <a
                                                                        href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('frontend') }}/assets/imgs/blog/author-4.png"
                                                                    alt="">
                                                                <a href="#"
                                                                    class="font-heading text-brand">Gemma</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022
                                                                            at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 80%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing elit. Delectus, suscipit exercitationem
                                                                    accusantium obcaecati quos voluptate nesciunt facilis
                                                                    itaque modi commodi dignissimos sequi repudiandae minus
                                                                    ab deleniti totam officia id incidunt? <a
                                                                        href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                                                    </div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                                    </div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings
                                                    calculated?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30"></div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form class="form-contact comment_form" action="#" id="commentForm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                    placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name" id="name"
                                                                    type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email" id="email"
                                                                    type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website" id="website"
                                                                    type="text" placeholder="Website">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="button button-contactForm">Submit
                                                            Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-12">
                            <h2 class="section-title style-1 mb-30">Related products</h2>
                        </div>
                        <div class="col-12">
                            <div class="row related-products">
                                @php
                                    $related_products = App\Models\Product::where('category_id', $singleproduct->category_id)
                                        ->where('id', '!=', $singleproduct->id)
                                        ->get();
                                @endphp
                                @foreach ($related_products as $related_product)
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6 mb-2">
                                        <div class="product-cart-wrap hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('single-page', $related_product->slug) }}"
                                                        tabindex="0">
                                                        <img class="default-img" src="{{ asset('storage/'.$related_product->thumbnail) }}"
                                                            alt="">
                                                        <img class="hover-img" src="{{ asset('storage/'.$related_product->thumbnail) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="shop-wishlist.html" tabindex="0"><i
                                                            class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html" tabindex="0"><i
                                                            class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="{{ route('single-page', $related_product->slug) }}"
                                                        tabindex="0">{{ $related_product->name }}</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span> </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>{{ $related_product->discount }}</span>
                                                    <span class="old-price">{{ $related_product->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.your-class').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.your-class').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    </script>
@endpush
