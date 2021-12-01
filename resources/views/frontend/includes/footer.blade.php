{{-- <!-- Footer --> --}}
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">

                        <div class="widget-title">
                            <div id="logo"><a href="{{ route('index') }}"><span class="logo-default"><img src="{{ asset('frontend/images/content/logo-transparent.png') }}" style="max-width: 200px"></span></a></div>
                        </div>
                        <p class="mb-5">Every retail food business is different and unique. Crucial success factors like store location, customer traffic can make or break any business.<br>
                            The enormous commitment, innovation required to create a successful retail business, there’s often little time left over to think about Freshness and Quality of food.</p>
                        {{-- <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Corporate</div>
                                <ul class="list">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Our Brands</div>
                                <ul class="list">
                                    @foreach ($brands as $brand)
                                        <li><a href="{{ route('brands', $brand->slug) }}">{{ $brand->brand }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Pages</div>
                                <ul class="list">
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="{{ route('news') }}">News</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Security</div>
                                <ul class="list">
                                    {{-- <script language="JavaScript" type="text/javascript">
                                        TrustLogo("https://sadhanas.co.id/public/frontend/img/sectigo_trust_seal_md_106x42.png", "CL1", "none");
                                        </script>
                                        <a  href="https://ssl.comodo.com/wildcard-ssl-certificates.php" id="comodoTL">Wildcard SSL</a> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; 2022 PT. Sadhana Ekapraya Amitra. All Rights Reserved.<a href="https://sadhanas.co.id" target="_blank"> Sadhana Group</a> </div>
        </div>
    </div>
</footer>
{{-- <!-- end: Footer --> --}}
