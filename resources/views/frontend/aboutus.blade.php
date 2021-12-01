@extends('frontend.layouts.app')

@section('meta')
         <title>About Us | Sadhana Group</title>
         <meta name="title" content="About Sadhana Group">
         <meta name="keyword" content="sadhanas sadhana ekapraya amitra tentang about us">
         <meta name="description" content="PT. SADHANA EKAPRAYA AMITRA has been building it’s business in refrigerator and freezer that performed very well in public and private sectors on maintaining freshness, such as Juice Dispenser, Commercial, Food Product, Cake Display, Beverage, and Blood Banking. The company can assist with suitable refrigerator equipment to meet the specific required temperature of different food.">
@endsection

@section('content')
{{-- Inspiro Slider --}}
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
    {{-- Slide 2 --}}
    <div class="slide kenburns" style="background-image:url('{{ asset('frontend/images/about/parallax-1.jpg') }}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                {{-- Captions --}}
                <span class="strong">Who we are</span>
                <h1>About Sadhana Group</h1>
                {{-- end: Captions --}}
            </div>
        </div>
    </div>
    {{-- end: Slide 2 --}}

</div>
{{--end: Inspiro Slider --}}

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


<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#8b0000" class="col-lg-4">
            {{-- <h1 class="text-lg text-uppercase">01.</h1> --}}
            <h3>OUR VISION</h3>
            <span>To be the world leading company in commercial Refrigeration – Freezer Industry</span>
        </div>

        <div style="background-color:#b83636" class="col-lg-4">
            {{-- <h1 class="text-lg text-uppercase">02.</h1> --}}
            <h3>OUR MISSION</h3>
            <span>We’re committed to serve our customer with high quality and low cost product and to be your partner who fully concern how to maintain freshness during it’s storage in a correct way.</span>
        </div>

        <div style="background-color:#aa5050" class="col-lg-4">
            {{-- <h1 class="text-lg text-uppercase">03.</h1> --}}
            <h3>OUR COMMITMENT</h3>
            <span>With continuous progress in every aspect, PT. SADHANA EKAPRAYA AMITRA committed to be the world leading company in refrigeration and freezer industry.</span>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>WHAT WE DO</h2>
            <span class="lead">Create amaThe most happiest time of the day!.</span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4>Social Marketing</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4>Hosting services</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="seperator"><i class="fa fa-chevron-down"></i></div>
</section>

<section id="client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Our Happy Client</h2>
                <p class="lead">Our awesome clients we've had the pleasure to work with!</p>
            </div>
        </div>
        <ul class="grid grid-5-columns">
            <li>
                <a><img src="{{ asset('frontend/images/clients/1.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/2.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/3.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/4.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/5.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/6.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/7.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/8.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/9.png') }}" alt="">
                </a>
            </li>
            <li>
                <a><img src="{{ asset('frontend/images/clients/10.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
</section>

@endsection
