<!-- Topbar -->
<div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="https://api.whatsapp.com/send?phone=628111099218"><i class="fab fa-whatsapp"> 08111099218</i></a></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <!-- <li class="social-whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></li> -->
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Topbar -->

<!-- Header -->
<header id="header" data-fullwidth="true">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="{{ route('index') }}"><span class="logo-default"><img src="{{ asset('frontend/images/content/logo-transparent.png') }}" style="max-width: 250px"></span><span class="logo-dark"><img src="{{ asset('frontend/images/content/logo-transparent.png') }}" style="max-width: 250px"></span></a> </div>
            <!--End: Logo-->
            <!-- Search -->
            <!-- <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div> -->
            <!-- end: search -->
            <!--Header Extras-->
            <!-- <div class="header-extras">
                <ul>
                    <li> <a id="btn-search" href="#"> <i class="icon-search"></i></a> </li>
                    <li>
                        <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                            <ul class="p-dropdown-content">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div> -->
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown mega-menu-item"><a href="#">Our Product</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Grids</li>
                                                    <li><a href="portfolio-2.html">Two Columns</a></li>
                                                    <li><a href="portfolio-3.html">Three Columns</a></li>
                                                    <li><a href="portfolio-4.html">Four Columns</a></li>
                                                    <li><a href="portfolio-5.html">Five Columns</a></li>
                                                    <li><a href="portfolio-6.html">Six Columns</a></li>
                                                    <li><a href="portfolio-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="portfolio-wide-3.html">Wide version</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                    <li><a href="portfolio-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a></li>
                                                    <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                    <li><a href="portfolio-masonry-5.html">Five Columns</a></li>
                                                    <li><a href="portfolio-masonry-6.html">Six Columns</a></li>
                                                    <li><a href="portfolio-masonry-sidebar.html">Sidebar version</a></li>
                                                    <li><a href="portfolio-masonry-wide-3.html">Wide version</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5" style="padding-top: 20px;">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5" style="padding-top: 20px;">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5" style="padding-top: 20px;">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
                                                    <li><a href="portfolio-load-more.html">Load more</a></li>
                                                    <li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
                                                    <li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
                                                    <li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
                                                    <li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
                                                    <li><a href="portfolio-video-modal.html">Video Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5" style="padding-top: 20px;">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="portfolio-sidebar-both.html">Both Sidebars</a></li>
                                                    <li><a href="portfolio-slider-3.html">Slider Default</a></li>
                                                    <li><a href="portfolio-no-page-title.html">No Page Title</a></li>
                                                    <li><a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a></li>
                                                    <li><a href="portfolio-hover-styles.html">Hover Styles</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2-5" style="padding-top: 20px;">
                                                <ul>
                                                    <li class="mega-menu-title">Single Project</li>
                                                    <li><a href="portfolio-page-grid-gallery.html">Grid Gallery</a></li>
                                                    <li><a href="portfolio-page-particles.html">Particles Wide Project</a></li>
                                                    <li><a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a></li>
                                                    <li><a href="portfolio-page-slider.html">Slider version</a></li>
                                                    <li><a href="portfolio-page-background-image.html">Fullscreen image</a></li>
                                                    <li><a href="portfolio-page-background-video.html">Fullscreen Video</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 no-padding">
                                                <div class="d-none d-lg-block m-t-40 m-b-10">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-9 m-t-10">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3"><a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="d-block d-lg-none">
                                                    <li><a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="index.html">About Us</a></li>
                            <li><a href="index.html">Our News</a></li>
                            <li><a href="index.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
