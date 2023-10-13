@extends('layout')

@section('content')

<div class="page-content">

    <!--SLIDER BANNER START-->
    <div class="sx-bnr-2-wrap-outer home-2-slider">

        <!-- swiper slides -->
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="sx-bnr-2-wrap swiper-slide overlay-overlay" style="background-image: url(images/banner/{{$banner->bg_image}});">
                <div class="sx-bg-overlay opacity-0 sx-bg-primary"></div>
                <div class="container">
                    <div class="sx-bnr-2-content">
                        <span class="sx-bnr-2-small-title">{{ $banner->small_title }} </span>
                        <h2 class="sx-bnr-2-large-title"><b>{{ $banner->title }}</b></h2>
                        <div class="sx-bnr-2-info">{{ $banner->desc }}</div>
                    </div>
                </div>

                <!-- <div class="sx-bnr-images">
                    <img src="{{ asset('images/banner/'.$banner->image) }}" alt="">
                </div> -->
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
    <section id="about">
        <div class="section-full  p-t110 p-b80 bg-white sx-about-bx3-outer">
            <div class="container">
                <div class="section-content">
                    <div class="sx-about-bx3-content-wrap">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="sx-about-bx3-content">
                                    <h2 class="sx-title">WE LISTEN, COLLABORATE & DELIVER !</h2>

                                    <span class="sx-title-2 text-secondary">COLLABORATE & DELIVER ! PT. Asia Quattro Net (AQN) is a Solution Integrator company based in Indonesia. Since it was founded in early 2005, the company has successfully helped partners and customers implement telecommunication and technology solutions, VAS platforms, digital services and more. Some of our customers are Indonesian mobile operators like Telkomsel, XL, Indosat, Three, Axis, as well as service providers and enterprises.</span>
                                    
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="hilite-title text-left p-l50 text-uppercase">
                        <strong>About Us</strong>
                    </div>
                    <div class="sx-our-services-bx">
                        <div class="row">

                            <!-- Block one -->
                            <div class="col-lg-4 col-md-6">
                                <div class="sx-service-bx-1 reverse">
                                    <div class="sx-icon-box-wraper">
                                        <div class="sx-service-bx-icon scale-in-center">
                                            <span class="sx-text-primary"><i class="flaticon-smart-contracts"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte">Solution Integrator in Mobile Telecommunication.</h4>
                                            <p class="text-justify">With experts, a long experience in the telecommunications industry, a large network of mobile industry players to multiple levels, combined with young talents in information technology and experience in legacy SS7 solutions to VAS to current Mobile Data and Digital technology, AQN is the perfect choice for a partner offering telecommunications solutions to Indonesian Mobile Operators. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block Two -->
                            <div class="col-lg-4 col-md-6">
                                <div class="sx-service-bx-1 reverse">
                                    <div class="sx-icon-box-wraper">
                                        <div class="sx-service-bx-icon scale-in-center">
                                            <span class="sx-text-primary"><i class="flaticon-coding"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte">Digital Marketing & Services.</h4>
                                            <p class="text-justify">AQN has evolved its expertise into the most efficient and effective way to communicate brands into the targeted market based on location by means of Digital technology and media, ensuring engagement and measurability. With solutions that are unique in nature, we ensure brands are not trapped by commodity but stand out in the Digital channel.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Block Three -->
                            <div class="col-lg-4 col-md-6">
                                <div class="sx-service-bx-1 reverse">
                                    <div class="sx-icon-box-wraper">
                                        <div class="sx-service-bx-icon scale-in-center">
                                            <span class="sx-text-primary"><i class="flaticon-security"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte text-left">Enterprise Solutions and Internet of Things.</h4>
                                            <p class="text-justify">With its experience in telecommunications, IT and the mobile digital world, AQN is the right partner in providing solutions for your enterprise as well as in leveraging machine to machine solutions towards the Internet of Things. Our team are more than happy to listen to your needs and engage you with possible solutions.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>

                        </div>
                    </div>
                    <!-- COUNTER START -->
                    <!-- <div class="counter-blocks">
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
                </div> -->
                    <!-- COUNTER  END -->
                </div>

            </div>

        </div>
    </section>
    <!-- ABOUT COMPANY END -->
    <div class="sx-div-line"></div>

    <!-- OUR PARTNERS SECTION START -->
    <section id="works">
        <div class="section-full p-t110 p-b80 sx-client-logo-1-outer sx-bg-white">
            <div class="container">

                <!-- TITLE START -->
                <div class="section-head center max-900">
                    <div class="sx-head-l-title"><h2 class="sx-title2">OUR WORKS</h2></div>
                    <div class="sx-head-l-title">
                        <h2 class="sx-title2">Some of our partners</h2>
                        <p class="text-justify">Since its establishment, AQN has been representing its technology partners, providing solutions in telecommunications, IT and mobile digital areas to mobile operators and enterprises in Indonesia, focusing on solution offerings and integrations among various key technology elements. We have provided project management, installations and technical support from 2005 until today with a team that keeps learning and evolving everyday with technological trends and evolutions.</p>
                    </div>
                </div>
                <!-- TITLE END -->

                <div class="hilite-title text-left p-l50 text-uppercase text-secondary">
                        <strong>OUR WORKS</strong>
                    </div>
                <div class="section-content">
                    <div class="client-grid m-b30">

                        <div class="row justify-content-center">
                            @foreach($partners as $partner)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href="{{url('/partner/'.$partner->slugs)}}" class="client-logo-pic" target="_blank">
                                    <img src="{{ asset('images/partners/'.$partner->image) }}" alt="">
                                </a>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <!-- OUR PARTNERS SECTION END -->
        <div class="sx-div-line"></div>

        <!-- OUR CLIENTS SECTION START -->
        <div class="section-full p-t110 p-b80 sx-client-logo-1-outer sx-bg-white">
            <div class="container">

                <!-- TITLE START -->
                <div class="section-head center max-900">
                    <!-- <div class="sx-head-s-title">Our Clients</div> -->
                    <div class="sx-head-l-title">
                        <h2 class="sx-title2">Our major clients</h2>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <!-- TITLE END -->


                <div class="section-content">
                    <div class="client-grid m-b30">

                        <div class="row justify-content-center">
                            @foreach($kliens as $client)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href="" class="client-logo-pic">
                                    <img src="{{ asset('images/clients/'.$client->image) }}" alt="">
                                </a>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- OUR CLIENTS SECTION END -->


    <!-- OUR CASE STUDY SECTION -->
    <section id="ourskills">
        <div class="section-full  p-t40 p-b80 bg-white sx-about-bx3-outer">
            <div class="container">
                <div class="section-content">

                    <!-- COUNTER START -->
                    <div class="counter-blocks">
                        <div class="section-head center max-900">
                            <div class="sx-head-l-title">
                                <h2 class="sx-title2">Our Skills</h2>
                            </div>
                        </div>
                        <div class="row when-item-four">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="sx-count">
                                    <h2 class="sx-title">

                                        <span class="counter">96</span>
                                        <span class="sx-cont-after">%</span>
                                    </h2>
                                    <div class="sx-count-info">Multi-fold approach</div>
                                    <p class="text-justify">
                                    A multi-fold approach right from people management to business risk management to new business initiatives, not only locally but also globally.
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="sx-count">
                                    <h2 class="sx-title">

                                        <span class="counter">98</span>
                                        <span class="sx-cont-after">%</span>
                                    </h2>
                                    <div class="sx-count-info">Flexibility</div>
                                    <p class="text-justify">
                                    Our adaptability is your advantage. We are always evolving and learning to match evolving tech trends, ensuring our solutions stay at the forefront of telecommunications innovation.
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="sx-count">
                                    <h2 class="sx-title">

                                        <span class="counter">100</span>
                                        <span class="sx-cont-after">%</span>
                                    </h2>
                                    <div class="sx-count-info">Go-local</div>
                                    <p class="text-justify">
                                    With out extensive network of local connections in Indonesia from our long experience, we tailor solutions to your region, optimizing efficiency and ensuring personalized service.
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="sx-count">
                                    <h2 class="sx-title">

                                        <span class="counter">99</span>
                                        <span class="sx-cont-after">%</span>
                                    </h2>
                                    <div class="sx-count-info">Mobile</div>
                                    <p class="text-justify">
                                    Our expertise in mobile technology ensures your business stays connected and thrives in a rapidly evolving digital landscape, connecting people and engaging the mobile world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COUNTER  END -->
                </div>

            </div>

        </div>
    </section>
    <!-- OUR CASE STUDY END -->


</div>

@endsection