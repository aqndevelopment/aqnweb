<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://www.google.com/recaptcha/enterprise.js?render=6LffVDEoAAAAAIZHpC2KLl-k-LkCD8BQT_EVvOac"></script>
    <script>
        function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6LffVDEoAAAAAIZHpC2KLl-k-LkCD8BQT_EVvOac', {action: 'LOGIN'});
            // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
            // reCAPTCHA Enterprise to the end user's browser.
            // This token must be validated by creating an assessment.
            // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
        });
        }
        </script> -->
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- PAGE TITLE HERE -->
    <title>Asiaquatro – Solution Integrator company based in Indonesia, accelerating digital lifestyle in telecommunication and technology solutions, digital advertising and services</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css')}}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css')}}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/loader.min.css')}}"><!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.min.css')}}"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}"><!-- WOW ANIMATE STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/feather.css')}}"><!-- Feather STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/lc_lightbox.css')}}"><!-- IMAGE POPUP -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}"><!-- SWIPER SLIDER CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"><!-- MAIN STYLE SHEET -->

</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="loading">
                <h2><img src="{{ asset('images/footer-logo.png')}}" alt="#"></h2>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->


    <div class="page-wraper">

        <!-- HEADER START -->
        @include('header')
        <!-- HEADER END -->

        <!-- CONTENT START -->
        @yield('content')

        <!-- CONTENT END -->

        <!-- FOOTER START -->
        @include('footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{asset('js/jquery-3.6.1.min.js.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset('js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{asset('js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('js/waypoints-sticky.min.js')}}"></script><!-- sticky header JS -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script><!-- MASONRY  -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
    <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script><!--sticky content-->
    <script src="{{asset('js/wow.js')}}"></script><!-- WOW JS -->
    <script src="{{asset('js/lc_lightbox.lite.js')}}"></script><!-- IMAGE POPUP -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script><!-- Swiper js -->
    <script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="https://www.google.com/recaptcha/api.js"></script><!-- GOOGLE reCAPTCHA  -->
    <script>
        function onSubmit(token) {
            document.getElementById("formcontact").submit();
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll("nav a");

        navLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();

                const targetId = this.getAttribute("href");
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        });
    });
    </script>
    <script>
    // Wait for the document to be ready
    $(document).ready(function () {
        // Select the form and toast elements
        const $form = $('#formcontact');
        const $successToast = $('#successToast');

        // Add an event listener to the form submission
        $form.submit(function (e) {
            e.preventDefault(); // Prevent the default form submission behavior (page reload)
            
            // You can perform form validation and submission logic here
            
            // If the form submission is successful, show the success toast
            $successToast.toast('show');
        });

        // Add an event listener for the toast's hidden event
        $successToast.on('hidden.bs.toast', function () {
            // After the toast is closed, submit the form
            $form.off('submit'); // Remove the form submission listener temporarily
            $form.submit(); // Trigger the form submission
        });
    });
</script>
</body>



</html>