@extends('layout')

@section('content')

<div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center" style="background-image:url(images/background/ourteam.jpg);">
            	<div class="overlay-main bg-white opacity-0"></div>
                
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                                <span class="sx-bnr-sm-title">Team AQN</span>
                        		<h2 class="sx-title">Meet the AQN's finest.</h2>
                                <p style="font-size: 1.3rem; line-height:2rem; color:#fa9a0b" class="text-white text-justify">With experience more than 20 years in Telecommunication industry both in areas of technology provider and service provider, AQN is lead and founded by 3 member of management team, since its establishment in 2005. with solid experience, they lead a group of young and talented team to keep AQN abreast in evolving business and technology.</p>
                            </div>                            
                        </div>
                                              
                    </div>
                </div> 
                <div class="sx-bnr-outline-text">
                    <h1>Our Team</h1>
                </div> 

            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- OUR TEAM START -->
            <div class="section-full p-t110 p-b80 sx-bg-light sx-ourteam-outer ">
                <div class="container">

                    <!-- TITLE START -->
                 <div class="text-center m-b20">
                    <img src="{{ asset('images/team/founders.jpg'); }}" alt="">
                    </div>
                    <div class="section-head center">
                        <div class="sx-head-l-title">
                            <h2 class="sx-title">Management</h2>
                        </div>
                        <div class="sx-head-s-title">Astrida W.  |  Agung B. Laksono  |  Suliana W.</div>
                    </div>                   
                    <!-- TITLE END -->
                    <div class="section-content">
                        <div class="row sx-our-team-section">
                            <!--Block-->
                            @foreach($ourteam as $ourteams)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="our-team-2">
                                    <div class="profile-image">
                                    <img src="{{ asset('images/team/'.$ourteams->image) }}" alt="">
                                        <div class="icons">
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="feather-linkedin"></i></a>
                                           <a href="https://dribble.com/"><i class="fa fa-dribbble"></i></a>
                                            <a href="https://behance.com/"><i class="fa fa-behance"></i></a>
                                        </div>                                            
                                    </div>
                                    <div class="figcaption">
                                        <p>{{$ourteams->posisi}}</p>
                                        <h4 class="sx-title"><a href="javascript:void(0)">{{$ourteams->nama}}</a></h4>
                                        <p class="text-justify text-dark">{{$ourteams->desc}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>
                    </div>
                </div>
            </div>   
            <!-- OUR TEAM END --> 
 
        </div>

@endsection