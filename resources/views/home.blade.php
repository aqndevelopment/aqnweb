@extends('layout')

@section('content')

<div class="page-content">

    <!--SLIDER BANNER START-->
    <div class="sx-bnr-2-wrap-outer home-2-slider">

        <!-- swiper slides -->
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="sx-bnr-2-wrap swiper-slide overlay-overlay"
                    style="background-image: url(images/banner/{{$banner->bg_image}});">
                        <div class="sx-bg-overlay opacity-0 sx-bg-primary"></div>
                <div class="container">
                    <div class="sx-bnr-2-content">
                        <span class="sx-bnr-2-small-title">{{ $banner->small_title }} </span>
                        <h2 class="sx-bnr-2-large-title"><b>{{ $banner->title }}</b></h2>
                        <div class="sx-bnr-2-info">{{ $banner->desc }}</div>
                    </div>
                </div>

                <div class="sx-bnr-images">
                    <img src="{{ asset('images/main-slider/slider2/'.$banner->image) }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <!-- !swiper slides -->


        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!--SLIDER BANNER END-->

    <!-- ABOUT COMPANY START -->
    <div class="section-full  p-t110 p-b80 bg-white sx-about-bx3-outer">
        <div class="container">
            <div class="section-content">
                <div class="sx-about-bx3-content-wrap">
                    <div class="row">

                        <div class="col-lg-6 col-md-12">
                            <div class="sx-about-bx3-media">
                                <div class="sx-dot-bx1"><img src="images/about/dotted-pic2.png" alt="image"></div>
                                <div class="sx-dot-bx2"><img src="images/about/dotted-pic2.png" alt="image"></div>
                                <div class="sx-ab3-img-outer">
                                    <div class="sx-ab3-media">
                                        <img src="images/about/p2.jpg" alt="media">
                                    </div>
                                </div>

                                <div class="sx-ab-circle-box">
                                    <div class="sx-ab-circle-box-content">
                                        <span class="sx-exp">10 Years Experience</span>
                                        <div class="sx-exp-title-outer">
                                            <span class="sx-exp-title-1">It</span>
                                            <span class="sx-exp-title-2">Solutions</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="sx-about-bx3-content">
                                <h2 class="sx-title">That's why we're on list of favorite.</h2>

                                <span class="sx-title-2">Nam eu leo nec diam efficitur aliquet lacinia tellus locusstome.</span>

                                <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper con nulla amet finibus currepet of our massing to learn.</p>

                                <p>Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euis tempor arcu semper congue nulla amet finibus currepet of our massing to learn.</p>

                                <div class="row sx-about-icon-bx3-column">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sx-icon-bx-3">
                                            <div class="sx-media">
                                                <i class="flaticon-incoming-call"></i>
                                            </div>
                                            <div class="sx-icon-bx-info">
                                                <span class="sx-icon-bx-title-info">Contact Phone</span>
                                                <span class="sx-icon-bx-title">+55 (9900) 666 22</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sx-icon-bx-3">
                                            <div class="sx-media">
                                                <i class="flaticon-email-1"></i>
                                            </div>
                                            <div class="sx-icon-bx-info">
                                                <span class="sx-icon-bx-title-info">Contact Mail</span>
                                                <span class="sx-icon-bx-title">info.Itodo@gmail.com</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong>About Us</strong>
                </div>

                <!-- COUNTER START -->
                <div class="counter-blocks">
                    <div class="row when-item-four">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title">
                                    <span class="sx-cont-before">+</span>
                                    <span class="counter">12</span>
                                    <span class="sx-cont-after">K</span>
                                </h2>
                                <div class="sx-count-info">Our Active Member</div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title">
                                    <span class="sx-cont-before">+</span>
                                    <span class="counter">1.5</span>
                                    <span class="sx-cont-after">K</span>
                                </h2>
                                <div class="sx-count-info">Our Total Project</div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title">
                                    <span class="sx-cont-before">+</span>
                                    <span class="counter">14</span>
                                </h2>
                                <div class="sx-count-info">Our Winning Award</div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="sx-count">
                                <h2 class="sx-title">
                                    <span class="sx-cont-before">+</span>
                                    <span class="counter">50</span>
                                </h2>
                                <div class="sx-count-info">Our Team Member</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COUNTER  END -->
            </div>

        </div>

    </div>
    <!-- ABOUT COMPANY END -->

    <!-- OUR SERVICES SECTION START -->
    <div class="section-full p-t110 p-b80 sx-why-choose-outer sx-bg-light">
        <div class="container">

            <!-- TITLE START -->
            <div class="section-head center">
                <div class="sx-head-s-title">Why Choose Us</div>
                <div class="sx-head-l-title">
                    <h2 class="sx-title">Our Work Services</h2>
                </div>
            </div>
            <!-- TITLE END -->


            <div class="section-content">
                <div class="owl-carousel sx-why-choose-carousel m-b30">
                    <!--One block-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-monitor"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">UX/UI & Graphics </h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Real Specialist</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One two-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-mouse-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">Product develop</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Branding Design</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One three-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-layers"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">UX/UI Design</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Apps Design</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One four-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-web-design"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">Web Designer</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Ecommerce</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One five-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-monitor"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">UX/UI & Graphics </h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Real Specialist</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One six-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-mouse-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">Product develop</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Branding Design</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One seven-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-layers"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">UX/UI Design</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Apps Design</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--One eight-->
                    <div class="item">
                        <div class="sx-icon-bx-4">
                            <div class="sx-icon-box-wraper">
                                <div class="sx-icon-bx-icon ">
                                    <span class="sx-text-primary"><i class="flaticon-web-design"></i></span>
                                </div>
                                <div class="icon-content">
                                    <a href="our-services-detail.html">
                                        <h4 class="sx-tilte">Web Designer</h4>
                                    </a>
                                    <a href="our-services-detail.html" class="sx-why-ch-category">Ecommerce</a>
                                    <p>Etiam finibus lectus ac metus cursus luctus in id nibh. Morbi sit amet dui quis mentor’s pent. tellus quis iaculis interdum</p>
                                    <a class="sx-circle-btn" href="our-services-detail.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- OUR SERVICES SECTION END -->

    <!-- OUR CLIENTS SECTION START -->
    <div class="section-full p-t110 p-b80 sx-client-logo-1-outer sx-bg-white">
        <div class="container">

            <!-- TITLE START -->
            <div class="section-head center max-900">
                <div class="sx-head-s-title">Our Clients</div>
                <div class="sx-head-l-title">
                    <h2 class="sx-title2">Our 1200 happy users around worldwide Itodo.</h2>
                </div>
            </div>
            <!-- TITLE END -->


            <div class="section-content">
                <div class="client-grid m-b30">

                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo1.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo2.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo3.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo4.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo5.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo6.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo7.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="contact.html" class="client-logo-pic">
                                <img src="images/client-logo/logo8.png" alt="">
                                <div>
                                    <span class="sx-circle-btn"><i class="fa fa-long-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- OUR CLIENTS SECTION END -->

    <div class="sx-div-line"></div>

    <!-- OUR CASE STUDY SECTION -->
    <div class="section-full p-t110 p-b80 sx-bg-white sx-case-study2-outer">

        <div class="container">
            <!--Large Title-->
            <div class="large-title-block">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <!-- TITLE START -->
                        <div class="section-head left">
                            <div class="sx-head-s-title">Our Case Study</div>
                            <div class="sx-head-l-title">
                                <h2 class="sx-title">Our Itodo IT Solution Special Case Studies.</h2>
                            </div>
                        </div>
                        <!-- TITLE END -->

                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class=" large-title-info">
                            <p>Nunc tempor ultrices iaculis. Cras suscipit odio ut neque interdum, sed faucibus lorem feugiat.
                                tincidunt tellus quis iaculis interdum. Donec a lobortis arcu. Fusce viverra a dolor quis tincidunt. Pellentesque vitae diam sodales nisl dapibus finibus.
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="section-content ">
            <div class="sx-case-study-bx2-wrap">
                <div class="row m-b30">
                    <!--One-->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-1.jpg)">

                            <div class="sx-case-media sx-img-overlay">
                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Apps Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">IT Solution Business Mokup land</h2>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!--two-->
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-2.jpg)">

                            <div class="sx-case-media sx-img-overlay">
                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Branding Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">Visit Our planned modern farm</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--three-->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-3.jpg)">

                            <div class="sx-case-media sx-img-overlay">

                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Apps Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">IT Solution Business Mokup land</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--four-->
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-4.jpg)">

                            <div class="sx-case-media sx-img-overlay">
                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Branding Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">Visit Our planned modern farm</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--five-->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-5.jpg)">

                            <div class="sx-case-media sx-img-overlay">
                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Apps Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">IT Solution Business Mokup land</h2>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!--six-->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="sx-case-study-bx2 sx-overlay-effect" style="background-image:url(images/case-study-2/pic-6.jpg)">

                            <div class="sx-case-media sx-img-overlay">
                                <a href="portfolio-detail.html" class="sx-case-link"><i class="flaticon-up-right-arrow"></i></a>
                            </div>

                            <div class="sx-case-info">
                                <div class="sx-s-title">Apps Design</div>
                                <a class="sx-l-title" href="portfolio-detail.html">
                                    <h2 class="sx-title">IT Solution Business Mokup land</h2>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="sx-bnr-readmore text-center">
                    <a href="portfolio-detail.html" class="site-button sx-btn-primary icon sx-btn-lg">
                        <i class="fa  fa-long-arrow-right"></i>
                        View All
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- OUR CASE STUDY END -->

    <!-- OUR TEAM START -->
    <div class="section-full p-t110 p-b80 sx-bg-light sx-ourteam-outer ">
        <div class="container">

            <!-- TITLE START -->
            <div class="section-head center">
                <div class="sx-head-s-title">Our Services</div>
                <div class="sx-head-l-title">
                    <h2 class="sx-title">IT Solution Team Members</h2>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="row sx-our-team-section">
                    <!--One block-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="our-team-2">
                            <div class="profile-image">
                                <img src="images/our-team5/1.jpg" alt="">
                                <div class="icons">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-dribbble"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="figcaption">
                                <p>Managing Director</p>
                                <h4 class="sx-title"><a href="our-team.html">Michael Smith</a></h4>
                            </div>
                        </div>
                    </div>

                    <!--One two-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="our-team-2">
                            <div class="profile-image">
                                <img src="images/our-team5/2.jpg" alt="">
                                <div class="icons">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-dribbble"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="figcaption">
                                <p>Managing Director</p>
                                <h4 class="sx-title"><a href="our-team.html">Delilah Brooklyn</a></h4>
                            </div>
                        </div>
                    </div>

                    <!--One three-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="our-team-2">
                            <div class="profile-image">
                                <img src="images/our-team5/3.jpg" alt="">
                                <div class="icons">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-dribbble"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="figcaption">
                                <p>Managing Director</p>
                                <h4 class="sx-title"><a href="our-team.html">Leilani Kennedy</a></h4>
                            </div>
                        </div>
                    </div>

                    <!--One For-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="our-team-2">
                            <div class="profile-image">
                                <img src="images/our-team5/4.jpg" alt="">
                                <div class="icons">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-dribbble"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="figcaption">
                                <p>Managing Director</p>
                                <h4 class="sx-title"><a href="our-team.html">Bella Natalia</a></h4>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- OUR TEAM END -->

    <!-- VIDEO SECTION START -->
    <div class="section-full sx-video-2-outer sx-atc-fixed" style="background-image:url(images/vid-2-bg.jpg)">

        <div class="container">

            <div class="sx-vodeo-section text-center">
                <div class="sx-video-btn-wrap">
                    <a href="https://www.youtube.com/watch?v=c1XNqw2gSbU" class="mfp-video circle">
                        <i class="flaticon-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO SECTION START -->

    <!-- ABOUT COMPANY START -->
    <div class="section-full  p-t110 p-b80 sx-bg-light sx-about-bx4-outer">
        <div class="container">

            <div class="section-content">
                <div class="sx-about-bx4-content-wrap p-b70">
                    <div class="row">

                        <div class="col-lg-6 col-md-12">
                            <div class="sx-about-bx4-media">
                                <div class="sx-ab4-img-outer">
                                    <div class="sx-ab4-media">
                                        <img src="images/about/p3.jpg" alt="media">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="sx-about-bx4-content">
                                <h2 class="sx-title">Why Choose Us to Join Our Work?</h2>
                                <p>Nulla facilisi. Nullam congue, tortor id finibus posuere, risus magna convallis massa, sit amet gr est tellus vitae dui. Proin hendrerit diam a commodo aliquam. In vitae interdum odio. Duis sitam nisl eget odio facilisis lacinia.</p>


                                <ul class="sx-arrow-circle-checked">
                                    <li>One-time security check fee: $99.95</li>
                                    <li>Elite membership fee: $999.95 per month</li>
                                    <li>Coast-to-coast domestic flights: from $3,799.95</li>
                                </ul>

                                <a href="why-choose-us.html" class="site-button sx-btn-primary icon sx-btn-lg">
                                    <i class="fa  fa-long-arrow-right"></i>
                                    View All
                                </a>


                            </div>
                        </div>


                    </div>
                </div>

                <!--testimonial section -->
                <div class="sx-testimonial-bx-2  m-b30">
                    <!-- TITLE START -->
                    <div class="section-head center">
                        <div class="sx-head-s-title">Our Testimonials</div>
                        <div class="sx-head-l-title">
                            <h2 class="sx-title">What Clients Say?</h2>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    <div class="owl-carousel testimonial-section-2 owl-btn-vertical-center">
                        <!--One block-->
                        <div class="item">
                            <div class="testimonial-1  hover-animation-1 sx-bg-white">
                                <div class="testimonial-detail">
                                    <div class="testimonial-user-info">
                                        <span class="testimonial-position">Founder Of Companey</span>
                                        <h4 class="testimonial-name">Oliver Eliah Charlotte</h4>
                                    </div>
                                </div>

                                <div class="testimonial-text">

                                    <p>Nullam cursus lacus insr veneni atis estas. libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna pretiumiss, ferment felis eget, cons exos. In etcou fringil aliber.</p>
                                </div>

                                <div class="testimonial-footer">
                                    <div class="testimonial-quote sx-text-primary">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <ul class="sx-rating-st1">
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <span class="sx-review-count">(5 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <!--One two-->
                        <div class="item">
                            <div class="testimonial-1  hover-animation-1 sx-bg-white">
                                <div class="testimonial-detail">
                                    <div class="testimonial-user-info">
                                        <span class="testimonial-position">Founder Of Companey</span>
                                        <h4 class="testimonial-name">Delilah Brooklyn</h4>
                                    </div>
                                </div>

                                <div class="testimonial-text">

                                    <p>Nullam cursus lacus insr veneni atis estas. libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna pretiumiss, ferment felis eget, cons exos. In etcou fringil aliber.</p>
                                </div>

                                <div class="testimonial-footer">
                                    <div class="testimonial-quote sx-text-primary">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <ul class="sx-rating-st1">
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <span class="sx-review-count">(5 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <!--One three-->
                        <div class="item">
                            <div class="testimonial-1  hover-animation-1 sx-bg-white">
                                <div class="testimonial-detail">
                                    <div class="testimonial-user-info">
                                        <span class="testimonial-position">Founder Of Companey</span>
                                        <h4 class="testimonial-name">Oliver Eliah Charlotte</h4>
                                    </div>
                                </div>

                                <div class="testimonial-text">

                                    <p>Nullam cursus lacus insr veneni atis estas. libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna pretiumiss, ferment felis eget, cons exos. In etcou fringil aliber.</p>
                                </div>

                                <div class="testimonial-footer">
                                    <div class="testimonial-quote sx-text-primary">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <ul class="sx-rating-st1">
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <span class="sx-review-count">(5 Reviews)</span>
                                </div>

                            </div>
                        </div>

                        <!--One four-->
                        <div class="item">
                            <div class="testimonial-1  hover-animation-1 sx-bg-white">
                                <div class="testimonial-detail">
                                    <div class="testimonial-user-info">
                                        <span class="testimonial-position">Founder Of Companey</span>
                                        <h4 class="testimonial-name">Delilah Brooklyn</h4>
                                    </div>
                                </div>

                                <div class="testimonial-text">

                                    <p>Nullam cursus lacus insr veneni atis estas. libero lorem, vehicul ege sapien id, faucibus vulp. Donec ut urna pretiumiss, ferment felis eget, cons exos. In etcou fringil aliber.</p>
                                </div>

                                <div class="testimonial-footer">
                                    <div class="testimonial-quote sx-text-primary">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <ul class="sx-rating-st1">
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                        <li><span><i class="fa fa-star"></i></span></li>
                                    </ul>
                                    <span class="sx-review-count">(5 Reviews)</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- ABOUT COMPANY END -->

    <!-- LATEST BLOG START -->
    <div class="section-full p-t110 p-b80 bg-white sx-latest-blog-outer ">
        <div class="container">

            <!-- TITLE START -->
            <div class="section-head center">
                <div class="sx-head-s-title">Our Blogs</div>
                <div class="sx-head-l-title">
                    <h2 class="sx-title">Our Latest News</h2>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="owl-carousel sx-latest-blog-1-carousel m-b30">
                    <!--One block-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic1.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--One two-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic2.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--One three-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic3.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--One For-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic1.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--One Five-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic2.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--One Six-->
                    <div class="item">
                        <div class="sx-latest-post-st-1">

                            <div class="sx-post-media sx-img-effect img-reflection">
                                <a href="blog-detail-full.html"><img src="images/blog/blog-grid/pic3.jpg" alt=""></a>
                            </div>

                            <div class="sx-post-info p-t30">
                                <div class="sx-post-meta ">
                                    <ul>
                                        <li class="post-date"><a href="blog-detail-full.html"><i class="fa fa-calendar"></i>01 Jan 2023</a></li>
                                        <li class="post-author"><a href="blog-detail-full.html"><i class="fa fa-comments"></i>0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="sx-post-title ">
                                    <h4 class="post-title"><a href="blog-detail-full.html">Standard size of business agency kal Consulat Latest Management.</a></h4>
                                </div>
                                <div class="sx-post-readmore">
                                    <a href="blog-detail-full.html" title="READ MORE" rel="bookmark" class="site-button icon"><i class="fa  fa-long-arrow-right"></i>Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
    <!-- LATEST BLOG  END -->


</div>

@endsection