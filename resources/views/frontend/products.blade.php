@extends('frontend.layouts.app')

@section('meta')
         <title>Our Products | Sadhana Group</title>
         <meta name="title" content="Our Products Sadhana Group">
         <meta name="keyword" content="sadhanas sadhana ekapraya amitra tentang our products">
         <meta name="description" content="Check out our products and find your needs with us">
@endsection

@section('content')
{{-- Page title --}}
<section id="page-title" style="background-image:url('{{ asset('frontend/homepages/shop-v3/images/1.jpg') }}');">
    <div class="container">
        <div class="page-title">
            <h1>Our Product</h1>
            {{-- <span>Sidebar Left</span> --}}
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ route('index') }}">Home</a>
                </li>
                <li class="active"><a href="{{ route('products') }}">Our Product</a>
                </li>
            </ul>
        </div>
    </div>
</section>
{{-- end: Page title --}}
<section id="page-content" class="sidebar-left">
    <div class="container">
        <div class="row">
            {{-- Content--}}
            <div class="content col-lg-9">
                <div class="row m-b-20">
                    <div class="col-lg-6 p-t-10 m-b-20">
                        <h3 class="m-b-20">A Monochromatic Spring 15</h3>
                        <p>Lorem ipsum dolor sit amet. Accusamus, sit, exercitationem, consequuntur, assumenda iusto eos commodi alias.</p>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="order-select">
                            <h6>Sort by</h6>
                            <p>Showing 1&ndash;12 of 25 results</p>
                            <form method="get">
                                <select class="form-control">
                                    <option selected="selected" value="order">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="order-select">
                            <h6>Sort by Price</h6>
                            <p>From 0 - 190$</p>
                            <form method="get">
                                <select class="form-control">
                                    <option selected="selected" value="">0$ - 50$</option>
                                    <option value="">51$ - 90$</option>
                                    <option value="">91$ - 120$</option>
                                    <option value="">121$ - 200$</option>
                                </select>
                            </form>
                        </div>
                    </div> --}}
                </div>
                {{--Product list--}}
                <div class="shop">
                    <div class="grid-layout grid-3-columns" data-item="grid-item">
                        @foreach ($products as $product)
                            <div class="grid-item">
                                <div class="product">
                                    <div class="product-image">
                                        @foreach ($product->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->url) }}" title="{{ $product->name }} product image"><img alt="{{ $product->name }} product image" src="{{ Storage::url($gallery->url) }}">
                                            </a>
                                        @endforeach
                                        {{-- <span class="product-sale">SALE</span>
                                        <span class="product-new">NEW</span>
                                        <span class="product-hot">HOT</span>
                                        <span class="product-sale-off">50% Off</span> --}}
                                        {{-- <span class="product-wishlist">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                        </span> --}}
                                        <div class="product-overlay">
                                            <a href="{{ route('details', $product->slug ) }}">View Product Details</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <small class="product-category">{{ $product->brand->brand }}</small>
                                        <div class="product-category">{{ $product->categories->category }}</div>
                                        <div class="product-title">
                                            <h3><a href="{{ route('details', $product->slug ) }}">{{ $product->name }}</a></h3>
                                        </div>
                                        <div class="product-price">
                                            {{-- <del>$19.00</del><ins>$15.00</ins> --}}
                                            {{ number_format($product->price) }}
                                        </div>
                                        {{-- <div class="product-rate">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-reviews"><a href="#">5 customer reviews</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    {{-- Pagination --}}
                        <ul class="pagination">
                            {{ $products->links() }}
                        </ul>
                    {{-- end: Pagination --}}
                </div>
                {{--End: Product list--}}
            </div>
            {{-- end: Content--}}
            {{-- Sidebar--}}
            <div class="sidebar col-lg-3">
                {{--widget newsletter--}}
                <div class="widget clearfix widget-archive">
                    <h4 class="widget-title">Product categories</h4>
                    <ul class="list list-lines">
                        @foreach ($product_categories as $categories)
                            <li>
                                <a href="#">{{ $categories->category }}</a> <span class="count">({{ $categories->product_count }})</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget clearfix widget-shop">
                    <h4 class="widget-title">Latest Products</h4>
                    @foreach ($latest_products as $product)
                        <div class="product">
                            <div class="product-image">
                                <a href="{{ route('details', $product->slug) }}"><img src="{{ $product->picture()->exists() ? Storage::url($product->picture->url) : '' }}" alt="Shop product image!">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">{{ $product->categories->category }}</div>
                                <div class="product-title">
                                    <h3><a href="{{ route('details', $product->slug) }}">{{ $product->name }}</a></h3>
                                </div>
                                <div class="product-price">Rp{{ number_format($product->price) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="widget clearfix widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div> --}}
                <div class="widget clearfix widget-newsletter">
                    <form class="form-inline" method="get" action="#">
                        <h4 class="widget-title">Subscribe for Latest Offers</h4>
                        <small>Subscribe to our Newsletter to get Sales Offers &amp; Coupon Codes etc.</small>
                        <div class="input-group">
                            <input type="email" placeholder="Enter your Email" class="form-control required email" name="widget-subscribe-form-email" aria-required="true">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            {{-- end: Sidebar--}}
        </div>
    </div>
</section>
@endsection
