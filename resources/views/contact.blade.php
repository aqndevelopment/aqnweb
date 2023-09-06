@extends('layout')

@section('content')

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center"    style="background-image:url({{ asset('images/background/contact.jpg') }});">
            	<div class="overlay-main bg-white opacity-0"></div>
                
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="sx-title">Contact Us.</h2>
                            </div>
                            
                        </div>
                                              
                    </div>
                </div> 
            </div>
            <!-- INNER PAGE BANNER END -->

            
            <!-- Contact us START -->
            <div class="section-full p-t110 p-b80 sx-bg-white sx-ourteam-outer ">
                <div class="container">
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="row justify-content-center">

                            <div class="col-lg-8 col-md-12  m-b30">
                            	<div class="contact-info">

                                    <!-- TITLE START -->
                                    <div class="section-head left">
                                        <div class="sx-head-s-title">Contact Us</div>
                                        <div class="sx-head-l-title">
                                            <h2 class="sx-title">PT. Asia Quattro Net </h2>
                                        </div>
                                    </div>                   
                                    <!-- TITLE END -->

                                    <div class="row sx-contact-form-icon-bx">

                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="sx-icon-bx-5">
                                                <div class="sx-media">
                                                    <i class="flaticon-telephone"></i>
                                                </div>                                   
                                                <div class="sx-icon-bx-info">
                                                    <a href="javascript:;" class="sx-icon-bx-title-info">Contact Phone</a>
                                                    <a href="javascript:;" class="sx-icon-bx-title">021 27651000</a>
                                                </div>                               
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="sx-icon-bx-5">
                                                <div class="sx-media">
                                                    <i class="flaticon-email-2"></i>
                                                </div>                                   
                                                <div class="sx-icon-bx-info">
                                                    <a href="javascript:;" class="sx-icon-bx-title-info">Contact Mail</a>
                                                    <a href="javascript:;" class="sx-icon-bx-title">sales@asiaquatro.net</a>
                                                </div>                               
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="sx-icon-bx-5">
                                                <div class="sx-media">
                                                    <i class="flaticon-map-location"></i>
                                                </div>                                   
                                                <div class="sx-icon-bx-info">
                                                    <a href="javascript:;" class="sx-icon-bx-title-info">Contact Location</a>
                                                    <a href="javascript:;" class="sx-icon-bx-title">Komplek Deplu 2, Jl. Gaharu 1 No. 5, Cilandak Barat, RT.5/RW.11, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410</a>
                                                </div>                               
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="sx-icon-bx-5">
                                                <div class="sx-media">
                                                    <i class="flaticon-clock"></i>
                                                </div>                                   
                                                <div class="sx-icon-bx-info">
                                                    <a href="javascript:;" class="sx-icon-bx-title-info">Office Time</a>
                                                    <a href="javascript:;" class="sx-icon-bx-title">
                                                        Mon- Fri: 8.00 - 17.00
                                                    </a>
                                                    <a href="javascript:;" class="sx-icon-bx-title">
                                                       Support: Everyday - 24H
                                                    </a>
                                                </div>                               
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div> 
                             
                        	<div class="col-lg-4 col-md-12 m-b30">
                                <div class="contact-home1-right">
                                    
									<div class="contact-home-1-form sx-bg-light">
                                        <h4 class="sx-title">Get In Touch</h4>
										<form class="cons-contact-form2 form-transparent" method="post" action="form-handler2.php">

											<div class="input input-animate">
												<input type="text" name="username" id="name" required="" placeholder="Your Name">
												<span class="spin"></span>
											</div>

											<div class="input input-animate">
												<input type="email" name="email" id="email" required="" placeholder="Your Email">
												<span class="spin"></span>
											</div> 

											<div class="input input-animate">
												<input type="text" name="phone" id="Phone" required="" placeholder="Phone Number">
												<span class="spin"></span>
											</div>   

											<div class="input textarea input-animate">
												<textarea name="message" id="message" required="" placeholder="Your Message"></textarea>
												<span class="spin"></span>
											</div>
										
                                            <div class="sx-btn-center text-center p-t10">
                                                <button type="submit" class="site-button sx-btn-primary icon sx-btn-lg">
                                                    <i class="fa  fa-long-arrow-right"></i>
                                                    Send Message
                                                </button>
                                            </div>   
										</form>
										
									</div>
                                </div>
                            </div> 
                      
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Contact us END --> 
 
        </div> 
        <!-- CONTENT END -->
@endsection