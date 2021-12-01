@extends('frontend.layouts.app')

@section('meta')
         <title>Contact Us | Sadhana Group</title>
         <meta name="title" content="Contact Us Sadhana Group">
         <meta name="keyword" content="sadhanas sadhana ekapraya amitra tentang contact us kontak hubungi kami">
         <meta name="description" content="PT. SADHANA EKAPRAYA AMITRA has been building it’s business in refrigerator and freezer that performed very well in public and private sectors on maintaining freshness, such as Juice Dispenser, Commercial, Food Product, Cake Display, Beverage, and Blood Banking. The company can assist with suitable refrigerator equipment to meet the specific required temperature of different food.">
@endsection

@section('content')
<!-- Page title -->
<section class="no-padding">
    <!-- Google Map -->
    {{-- <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes" data-height-lg="500" data-height-xs="200" data-height-sm="300"></div> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.205533575618!2d106.7613924!3d-6.1907313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87982dcf0e9810b7!2sPT.%20Sadhana%20Ekapraya%20Amitra!5e0!3m2!1sen!2sid!4v1638328847932!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- end: Google Map -->
</section>
<!-- end: Page title -->
<!-- CONTENT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                <div class="row m-t-40">
                    <div class="col-lg-6">
                        <address>
                            <strong>Head Office & Showroom Jakarta</strong><br>
                            Jl Raya Perjuangan Rukan Grahamas Blok B No.20 <br>
                            Kebon Jeruk, Jakarta Barat <br>
                            11530<br>
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(021) 53654135 <br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;0811 109 9218 <br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:tanya-kami@sadhanas.co.id">tanya-kami@sadhanas.co.id</a>
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Surabaya Branch Office</strong><br>
                            Pergudangan Meiko Abadi blok B/53 <br>
                            Desa Wedi, Betro Gedangan <br>
                            Sidoarjo, Jawa Timur <br>
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(031) 8014751-53 <br>
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Yogyakarta Branch Office</strong><br>
                            Jl. Nogotirto No. 13 Karang Tengah <br>
                            Gamping, Sleman <br>
                            Daerah Istimewa Yogyakarta <br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;0813 3450 2303 <br>
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Mataram Branch Office</strong><br>
                            Jl. Airlangga No. 50 Gomong <br>
                            Selaparang Mataram <br>
                            Nusa Tenggara Barat <br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;0818 0575 3813 <br>
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Makassar Branch Office</strong><br>
                            Jalan Ir Sutami No.38 (Kompleks Kawasan Pergudangan Parangloe Indah Blok C1/11) <br>
                            Kapasa, Kec. Tamalanrea <br>
                            Kota Makassar, Sulawesi Selatan 90241 <br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;0853 6680 3831 <br>
                        </address>
                    </div>
                </div>
                <div class="social-icons m-t-30 social-icons-colored social-icons-large">
                    <ul>
                        <li class="social-whatsapp"><a href="https://api.whatsapp.com/send?phone=628111099218" target="new"><i class="fab fa-whatsapp"></i></a></li>
                        <li class="social-facebook"><a href="https://www.facebook.com/sadhanaSEA/" target="new"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-instagram"><a href="https://www.instagram.com/sadhanasid/" target="new"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-twitter"><a href="https://twitter.com/sadhanasid" target="new"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-youtube"><a href="https://www.youtube.com/channel/UCIlxWXMKR8IgxbFN_mN1HdQ" target="new"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-linkedin"><a href="https://www.linkedin.com/company/pt-sadhana-ekapraya-amitra/" target="new"><i class="fab fa-linkedin" ></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="contact-us" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="form-control-label">Your Name</label>
                            <input  type="text"
                                    name="name"
                                    placeholder="Your name here"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"/>
                            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="form-control-label">Your Email</label>
                            <input  type="text"
                                    name="email"
                                    placeholder="Your email here"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"/>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="subject" class="form-control-label">Subject</label>
                            <input  type="text"
                                    name="subject"
                                    placeholder="Subject.."
                                    value="{{ old('subject') }}"
                                    class="form-control @error('subject') is-invalid @enderror"/>
                            @error('subject') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-lg-12">
                        <div class="form-group">
                            <label for="description" class="form-control-label">Your Message</label>
                            <textarea name="description" rows="5"
                                    class="form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
                            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                          </div>
                        </div>
                    <div class="form-group col-md-12">
                    <div class="text-right" style="padding-right: 8px">
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit" id="form-submit">
                                <i class="fa fa-paper-plane"></i>&nbsp;Send Message
                            </button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end: Content -->
@endsection
