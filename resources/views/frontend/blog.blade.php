@extends("frontend.app")

@section("content")

<div class="page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-product-fillter mb-50">
                    <div class="totall-product">
                        <h2>
                            <img class="w-36px mr-10" src="assets/imgs/theme/icons/category-1.svg" alt="" />
                             Blogs
                        </h2>
                    </div>
                </div>
                <div class="loop-grid">
                    <div class="row">
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
                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            {{ $blogs->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
