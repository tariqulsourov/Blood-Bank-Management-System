<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Secure Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Blood bank management for a centralized blood supply system" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('/') }}/frontend_css_js/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/style6.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
<!-- banner-inner -->
<div id="demo-1" data-zs-src='["{{ asset('/') }}/frontend_css_js/images/1.jpg", "{{ asset('/') }}/frontend_css_js/images/2.jpg","{{ asset('/') }}/frontend_css_js/images/3.jpg", "{{ asset('/') }}/frontend_css_js/images/4.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row">

                        <div class="col-md-4">
                            <span>Welcome !</span>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="{{ route('frontend.login.adminlogin') }}" >
                                <i class="fas fa-lock"></i> Admin Sign In</a>
                        </div>
                        <div class="col-md-3 sign-btn">
                            <a href="#" >
                                <i class="far fa-user"></i> Register</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo">
                        <h1>
                            <a class="navbar-brand" href="#">
                                <i class="fab fa-codepen"></i> SBB</a>
                        </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('/') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.reg.direct_donorreg')}}">About Blood Donation</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Questions
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('frontend.information.bloodtype') }}" title="">Information about blood groups</a>
                                    <a class="dropdown-item" href="{{ route('frontend.information.enterage') }}" title="">Age wise donor and patient</a>
                                    <a class="dropdown-item" href="candidates_list.html" title="">Questions 3</a>
                                    <a class="dropdown-item" href="candidates_single.html" title="">Questions 1</a>


                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Donors
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('donor_at_bloodbank')}}" title="">Donor at Blood Bank</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('bloodbank')}}">Blood Banks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>
        </div>
        <!--//banner-info-w3layouts-->
    </div>
</div>
<!-- banner-text -->

<!--footer -->
<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top">
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>Donate blood in a proper system</p>
                    <ul class="footer-social text-left mt-lg-4 mt-3">

                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>Dhaka , Bangladesh</p>
                    <div class="phone">
                        <h4>Contact :</h4>
                        <p>Phone : +88019860000</p>
                        <p>Email :
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Quick Links</h3>
                </div>
                <ul class="links">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <ul class="links">
                    <li>
                        <a href="how.html">How it works</a>
                    </li>
                    <li>
                        <a href="contact.html">Support</a>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
            <div class="col-lg-3 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Health tips</h3>
                </div>
                <div class="footer-text">
                    <p>Know about blood and Live a healthy life </p>
                    <ul class="links" class="text-secondary">
                        <li><a href="#">Importance of Clean blood</a></li>
                        <li><a href="#">Safe Donation</a></li>
                    </ul>
                </div>
            </div>-->

        </div>
        <div class="copyright mt-4">

        </div>
    </div>
</footer>
<!-- //footer -->
<!-- js -->
<!--/slider-->
<script src="{{ asset('/') }}/frontend_css_js/js/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/modernizr-2.6.2.min.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/jquery.zoomslider.min.js"></script>
<!--//slider-->
<!--search jQuery-->
<script src="{{ asset('/') }}/frontend_css_js/js/classie-search.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/demo1-search.js"></script>
<!--//search jQuery-->

<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- stats -->
<script src="{{ asset('/') }}/frontend_css_js/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- //js -->
<script src="{{ asset('/') }}/frontend_css_js/js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="{{ asset('/') }}/frontend_css_js/js/move-top.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
</body>

</html>
