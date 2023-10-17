<header class="header-style2 site-header mobile-sider-drawer-menu full-navbar">
    
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar">

            <div class="container clearfix">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{url("/");}}">
                            <img src="{{ asset('images/Logo-light.png') }}" alt="#">
                        </a>
                    </div>
                </div>
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul class="list-unstyled social-bx d-flex flex-wrap align-content-center text-white ">
                            <!-- <li><a href="https://www.facebook.com/"><i class="feather-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="feather-twitter"></i></a></li> -->
                            <li><a href="https://www.linkedin.com/company/pt.-asia-quattro-net" target="_blank"><i class="feather-linkedin"></i></a></li>
                            <!-- <li><a href="https://www.instagram.com/"><i class="feather-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- EXTRA Nav -->

                <!-- MAIN NAVIGATION -->
                <div class="header-nav navbar-collapse collapse d-flex justify-content-center collapse ">
                    <ul class=" nav navbar-nav ">
                             <li><a href="{{url("/");}}">Home</a></li>
                             <li><a href="{{url("/#about");}}">About</a></li>
                             <li><a href="{{url("/#works");}}">Works</a></li>
                             <li><a href="{{url("/#ourskills");}}">Our Skills</a></li>
                             <li><a href="{{url("/ourteam");}}">Our Team</a></li>
                             <li><a href="{{url("/techsupport");}}">Technical Support</a></li>
                             <li><a href="{{url("/#contact");}}">Contact</a></li>

                    </ul>
                </div>


            </div>

        </div>
    </div>
</header>