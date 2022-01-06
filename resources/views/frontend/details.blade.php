@extends('frontend.layouts.app')

@section('meta')
         <title>{{ $product->name }} | Sadhana Group</title>
         <meta name="title" content="{{ $product->name }} Sadhana Group">
         <meta name="keyword" content="{{ $product->name }} sadhanas sadhana ekapraya amitra ">
         <meta name="description" content="{!! Str::limit($product->description, 70) !!}">
@endsection

@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            {{-- Content--}}
            <div class="content col-lg-9">
                <div class="product">
                    <div class="row m-b-40">
                        <div class="col-lg-5">
                            <div class="product-image">
                                {{-- Carousel slider --}}
                                <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                                    @foreach ($product->galleries as $gallery)
                                        <a href="{{ Storage::url($gallery->url) }}" data-lightbox="image" title="{{ $product->name }} product image"><img alt="{{ $product->name }} product image" src="{{ Storage::url($gallery->url) }}">
                                        </a>
                                    @endforeach
                                </div>
                                {{-- Carousel slider --}}
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-description">
                                <small class="product-category">{{ $product->brand->brand }}</small>
                                <div class="product-category">{{ $product->categories->category }}</div>
                                <div class="product-title">
                                    <h3><a href="{{ Route('details', $product->slug) }}">{{ $product->name }}</a></h3>
                                </div>
                                <div class="product-price"><ins>Rp {{ number_format($product->price) }}</ins>
                                </div>
                                <div class="seperator m-b-10"></div>
                                    {!! Str::limit($product->description, 500) !!}
                                <div class="product-meta">
                                        <p>Tags: {{ $product->tags }}
                                    </p>
                                </div>
                                <div class="seperator m-t-20 m-b-10"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Add to Cart</h6>
                                    <a class="btn btn-primary" href="#"><i class="icon-shopping-cart"></i> Add to cart</a>
                                </div>
                                <div class="col-lg-6">
                                    <h6>Minta Penawaran</h6>
                                    <a class="btn btn-rounded btn-outline btn-reveal" href="#"><span>Request Penawaran</span><i class="icon-info"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Product additional tabs --}}
                    <div class="tabs tabs-folder">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-align-justify"></i>Description</a></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="true"><i class="fa fa-info"></i>Additional Info</a></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent3">
                            <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                {!! $product->description !!}
                            </div>
                            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Volume</td>
                                            <td>{{ $product->volume }} Liter</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>{{ $product->length }} mm</td>
                                        </tr>
                                        <tr>
                                            <td>Width</td>
                                            <td>{{ $product->width }} mm</td>
                                        </tr>
                                        <tr>
                                            <td>Height</td>
                                            <td>{{ $product->height }} mm</td>
                                        </tr>
                                        <tr>
                                            <td>Power</td>
                                            <td>{{ $product->power }} Watt</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>{{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>{{ $product->warranty }} Months</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Rak</td>
                                            <td>{{ $product->rak }}</td>
                                        </tr>
                                        <tr>
                                            <td>Temperature</td>
                                            <td>{{ $product->temp }} &#8451</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- end: Product additional tabs --}}
                </div>
                <div class="heading-text heading-line text-center">
                    <h4>Related Products you may be interested!</h4>
                </div>
                <div class="row">
                    @foreach ($recommendations as $recommend)
                    <div class="col-lg-4">
                        <div class="widget-shop">
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{ route('details', $recommend->slug) }}"><img src="{{ $recommend->picture()->exists() ? Storage::url($recommend->picture->url) : '' }}" alt="Shop product image!">
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{ $recommend->categories->category }}</div>
                                    <div class="product-title">
                                        <h3><a href="{{ route('details', $recommend->slug) }}">{{ $recommend->name }}</a></h3>
                                    </div>
                                    <div class="product-price" style="width: 100%">Rp {{ number_format($recommend->price) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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
