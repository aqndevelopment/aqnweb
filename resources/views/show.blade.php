@extends('layout')

@section('content')

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="full-landing-image sx-bnr-inr overlay-wraper  bg-top-center"    style="background-color: #dcdcdc; background-size: 300px 225px;background-position:center; background-image:url({{ asset('images/partners/'.$partner->image) }});">
            	<div class="overlay-main bg-white opacity-0"></div>
                
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<!-- <div class="banner-title-outer">
                        	<div class="banner-title-name">
                                <span class="sx-bnr-sm-title">we are Dedicated</span>
                        		<h2 class="sx-title">Blog detail.</h2>
                            </div>
                        </div>                                          -->
                    </div>
                </div> 
                <div class="sx-bnr-outline-text">
                    <h1>{{ $partner->nama }}</h1>
                </div> 

            </div>
            <!-- INNER PAGE BANNER END -->

			<!-- SECTION CONTENT START -->
            <div class="section-full p-t100 p-b70 mobile-page-padding">
                <div class="container">
                    
                        <div class="blog-single-space-wrap max-w800 m-lr-auto">
                            <div class="blog-single-space">
                                <!-- BLOG START --> 
                                <!-- <div class="sx-post-media sx-img-effect img-reflection m-b30">
                                    <a href="blog-single.html"><img src="images/blog/single/pic-1.jpg" alt="Image"></a>
                                </div> -->
                                <div class="single-blog-post blog-detail m-b30">
                                    
                                    <div class="sx-post-meta ">
                                        <ul>
                                            <li class="post-date"><a href="#"><i class="fa fa-calendar"></i>{{date('d-m-Y', strtotime($partner->created_date));}}</a></li>
                                            <!-- <li class="post-author"><a href="blog-single.html"><i class="fa fa-comments"></i>0 Comments</a></li> -->
                                        </ul>
                                    </div> 
                                                                  
                                    <!-- <div class="sx-post-title ">
                                        <h2 class="post-title">Standard size of business agency kal Consulat Latest Management.</h2>
                                    </div> -->
    
                                    <div class="sx-post-text">
                                        {!! $partner->desc; !!}


                                        
                                    </div>
                                    
                                    <div class="autor-post-tag-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="widget_tag_cloud single-post-tag">
                                                    <?php $tag = explode(',',$partner->tags);  ?>

                                                    <h6 class="tagcloud">Tags:</h6>
                                                    <div class="tagcloud">
                                                        @foreach ($tag as $tagg)
                                                            <a href="#">{{$tagg}}</a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="widget_social_inks sx-social-icons ">
                                                    <ul class="d-flex">
                                                        <!-- <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    </div> 
                                 
                                </div>
                                
                            </div>

                        </div>
                        
                </div>
            </div>
            <!-- SECTION CONTENT END -->
 
        </div> 
        <!-- CONTENT END -->

@endsection