@extends('frontend.layouts.app')

@section('meta')
         <title>Welcome to Sadhana Group</title>
         <meta name="title" content="Sadhana Group">
         <meta name="keyword" content="karir sadhanas sadhana ekapraya amitra lowongan kerja">
         <meta name="description" content="PT. SADHANA EKAPRAYA AMITRA has been building it’s business in refrigerator and freezer that performed very well in public and private sectors on maintaining freshness, such as Juice Dispenser, Commercial, Food Product, Cake Display, Beverage, and Blood Banking. The company can assist with suitable refrigerator equipment to meet the specific required temperature of different food.">
@endsection

@section('content')
{{-- Inspiro Slider --}}
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360" data-autoplay="5000" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
    {{-- Slide 1 --}}
    <div class="slide" style="background-image:url('{{ asset('frontend/homepages/shop-v3/images/1.jpg') }}');">
        <div class="container">
            <div class="slide-captions text-right">
                {{-- Captions --}}
                <h2 class="text-lg">THE MOST<br />POPULAR BRAND</h2>
                <a class="btn btn-light" href="#">Shop Now</a>
                <a class="btn btn-light btn-outline" href="#">View Collection</a>
                {{-- end: Captions --}}
            </div>
        </div>
    </div>
    {{-- end: Slide 1 --}}
    {{-- Slide 2 --}}
    <div class="slide" style="background-image:url('{{ asset('frontend/homepages/shop-v3/images/2.jpg') }}');">
        <div class="container">
            <div class="slide-captions">
                {{-- Captions --}}
                <h2 class="text-lg text-dark">BIG SALE<br />UP TO 50%</h2>
                <a class="btn btn-dark" href="#">Shop Now</a>
                <a class="btn btn-dark btn-outline" href="#">View Collection</a>
                {{-- end: Captions --}}
            </div>
        </div>
    </div>
    {{-- end: Slide 2 --}}
</div>
{{-- end: Inspiro Slider --}}

{{-- end: SHOP CATEGORIES --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-text heading-line text-center">
                    <h4>Browser our categories </h4>
                </div>

            </div>
        </div>

        <div class="shop-category">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{{ asset('frontend/images/shop/shop-category/1.jpg') }}">
                            <div class="shop-category-box-title text-center">
                                <h6>Women</h6><small>64 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{{ asset('frontend/images/shop/shop-category/2.jpg') }}">
                            <div class="shop-category-box-title text-center">
                                <h6>Wallet's</h6><small>36 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{{ asset('frontend/images/shop/shop-category/2.jpg') }}">
                            <div class="shop-category-box-title text-center">
                                <h6>Man</h6><small>25 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt="" src="{{ asset('frontend/images/shop/shop-category/2.jpg') }}">
                            <div class="shop-category-box-title text-center">
                                <h6>Socks</h6><small>80 products</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end: SHOP CATEGORIES --}}

{{-- Fullscreen HTML5 video --}}
<section class="fullscreen" data-bg-parallax="{{ asset('frontend/images/parallax/26.jpg') }}">
    <div class="bg-overlay"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <div class="heading-text  text-light">
                            <h5 class="text-uppercase">Features
                            </h5>
                            <h3><span>Create beautiful websites with ease</span></h2>
                                <p>Tons of features that will give you the power to create any website</p>
                                <a href="" class="btn btn-light btn-outline btn-rounded">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="shadow ml-5">
                            <video playsinline="true" autoplay controls loop="true" muted="true" preload="auto">
                                <source src="{{ asset('frontend/video/waves.mp4') }}" type="video/mp4"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end: Fullscreen HTML5 video --}}

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>THE SADHANA GROUP</h2>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">Every retail food business is different and unique. Crucial success factors like store location, customer traffic can make or break any business. The enormous commitment, innovation required to create a successful retail business, there’s often little time left over to think about Freshness and Quality of food.</div>
                    <div class="col-lg-6">Established in 1991, PT. SADHANA EKAPRAYA AMITRA has been building it’s business in refrigerator and freezer that performed very well in public and private sectors on maintaining freshness, such as Juice Dispenser, Commercial, Food Product, Cake Display, Beverage, and Blood Banking. The company can assist with suitable refrigerator equipment to meet the specific required temperature of different food.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <h4>Meet Our</h4>
                <div class="row client-logos carousel-description-clients carousel-description-style ">
                    <div class="col-lg-4">
                        <div class="description">
                            <h2>Happy Clients</h2> Aliquam enim enim, pharetra in sodales at, interdum sit amet
                            dui.
                            Nullam vulputate euis od urna non pharetra. Phasellus bland matt is ipsum, ac
                            laoreet lorem
                            lacinia et. interum sit amet dui.
                        </div>
                        <a href="#" class="btn btn-inverted" style="top: 10px;">See Our Client</a>
                    </div>
                    <div class="col-lg-8">
                        <div class="carousel dots-grey" data-items="4" data-arrows="false" data-autoplay="1000">
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/1.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/2.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/3.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/4.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/5.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/6.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/7.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/8.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/9.png') }}"></a>
                            </div>
                            <div>
                                <a href="#"><img alt="" src="{{ asset('frontend/images/clients/10.png') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </div>
</section>

{{-- Shop products CAROUSEL --}}
<section>
    <div class="container">
        <div class="heading-text heading-line text-center">
            <h4>Our Products</h4>
        </div>
        <div class="carousel shop-products" data-margin="10" data-dots="false" data-autoplay="1600">
            @foreach ($products as $product)
            <div class="product">
                <div class="product-image">
                    @foreach ($product->galleries->take(1) as $gallery)
                    <a href="#"><img style="max-height: 507px; max-width: 380px" alt="Shop product image" src="{{ Storage::url($gallery->url) }}">
                    </a>
                    @endforeach
                    {{-- <span class="product-new">NEW</span> --}}
                    {{-- <span class="product-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </span> --}}
                    <div class="product-overlay">
                        <a href="{{ route('product-details', $product->slug) }}">View</a>
                    </div>
                </div>

                <div class="product-description">
                    <div class="product-category">{{ $product->categories->category }}</div>
                    <div class="product-title">
                        <h3><a href="{{ route('product-details', $product->slug) }}">{{ $product->name }}</a></h3>
                    </div>
                    {{-- <div class="product-price"><ins>$15.00</ins>
                    </div> --}}
                    {{-- <div class="product-rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="product-reviews"><a href="#">6 customer reviews</a>
                    </div> --}}
                </div>
            </div>
            @endforeach

            {{-- PRODUCT EXAMPLE --}}
                {{-- <div class="product">
                    <div class="product-image">
                        <a href="#"><img alt="Shop product image!" src="{{ asset('frontend/images/shop/products/2.jpg') }}">
                        </a>
                        <a href="#"><img alt="Shop product image!" src="{{ asset('frontend/images/shop/products/6.jpg') }}">
                        </a>
                        <span class="product-wishlist">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </span>
                        <div class="product-overlay">
                            <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                        </div>
                    </div>

                    <div class="product-description">
                        <div class="product-category">Women</div>
                        <div class="product-title">
                            <h3><a href="#">Consume Tshirt</a></h3>
                        </div>
                        <div class="product-price"><ins>$39.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div> --}}
            {{-- PRODUCT EXAMPLE --}}
        </div>
    </div>

</section>
{{-- END: Shop products CAROUSEL --}}

{{-- BLOG --}}
<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>LATEST NEWS</h2>
            <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
        </div>
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @foreach ($blogs as $blog)
            {{-- Post item--> --}}
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{ route('news-detail', $blog->slug) }}">
                                    <img style="max-height: 350px; max-width: 525px" alt="Blog Thumbnail" src="{{ Storage::url($blog->thumbnail) }}">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $blog->created_at->diffForHumans() }}</span>
                                <h2><a href="{{ route('news-detail', $blog->slug) }}">{{ $blog->title }}
                                    </a></h2>
                                <p>{!! Str::limit( $blog->description, '150' ) !!}</p>
                                <a href="{{ route('news-detail', $blog->slug) }}" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
            {{-- end: Post item--> --}}
            @endforeach
            {{-- Post item EXAMPLE--> --}}
            {{-- <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="" src="{{ asset('frontend/images/blog/17.jpg') }}">
                        </a>
                        <span class="post-meta-category"><a href="">Science</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                Comments</a></span>
                        <h2><a href="#">Standard post with a single image
                            </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div> --}}
            {{-- end: Post item EXAMPLE--> --}}
        </div>
    </div>
</section>
{{-- end: BLOG --}}
@include('frontend.includes.subsmodal')
@endsection
