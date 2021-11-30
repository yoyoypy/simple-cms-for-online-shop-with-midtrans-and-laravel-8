{{-- <!-- Footer --> --}}
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">

                        <div class="widget-title">Polo HTML5 Template</div>
                        <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                            All rights reserved. Copyright © 2019. INSPIRO.</p>
                        <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Corporate</div>
                                <ul class="list">
                                    <li><a href="#">About Us</a></li>
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
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Contact Us</a></li>
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
