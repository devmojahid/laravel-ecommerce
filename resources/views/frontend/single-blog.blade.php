@extends("frontend.app")
@section("content")
<div class="page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="single-page pt-50 pr-30">
                    <div class="single-header style-2">
                        <div class="row">
                            <div class="col-xl-10 col-lg-12 m-auto">
                                <h6 class="mb-10"><a href="#">{{ $blog->category->title }}</a></h6>
                                <h2 class="mb-10">{{ $blog->title }}</h2>
                                <div class="single-header-meta">
                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                        <a class="author-avatar" href="#">
                                            <img class="img-circle" src="assets/imgs/blog/author-1.png" alt="">
                                        </a>
                                        <span class="post-by">By <a href="#">mojahid</a></span>
                                        <span class="post-on has-dot">2 hours ago</span>
                                        <span class="time-reading has-dot">8 mins read</span>
                                    </div>
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li class="mr-5"><a href="#"><img src="assets/imgs/theme/icons/icon-bookmark.svg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/imgs/theme/icons/icon-heart-2.svg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <figure class="single-thumbnail">
                        <img src="{{ asset("storage/".$blog->image) }}" alt="">
                    </figure>
                    <div class="single-content">
                        <div class="row">
                            <div class="col-xl-10 col-lg-12 m-auto">
                              <p>{{ $blog->content }}</p>
                                <div class="entry-bottom mt-50 mb-30">
                                    <div class="tags w-50 w-sm-100">
                                        <a href="blog-category-big.html" rel="tag" class="hover-up btn btn-sm btn-rounded mr-10">deer</a>
                                        <a href="blog-category-big.html" rel="tag" class="hover-up btn btn-sm btn-rounded mr-10">nature</a>
                                        <a href="blog-category-big.html" rel="tag" class="hover-up btn btn-sm btn-rounded mr-10">conserve</a>
                                    </div>
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
