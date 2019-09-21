<!DOCTYPE html>
<html lang="zxx">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Secure Blood Bank') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Blood Bank Management System</title>
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
    <link href="{{ asset('/') }}/frontend_css_js/css/style6.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}/frontend_css_js/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('/') }}/frontend_css_js/css1/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('/') }}/frontend_css_js/css1/styles.css" rel="stylesheet">
</head>

<body>
<!-- banner-inner -->
<div id="demo-1" class="page-content">
    <div>
        <div class="header-top">
            <header>
                <div class="top-head ml-lg-auto text-center">
                    <div class="row top-vl">

                        <div class="col-md-4">
                            <span>Welcome Back!</span>

                        </div>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi There <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </header>
        </div>
        <!--/banner-info-w3layouts-->
        <div class="banner-info-w3layouts text-center">
        </div>
        <!--//banner-info-w3layouts-->

    </div>

</div>

@yield('body')




<!-- //footer -->

<!--//model-form-->
<!-- js -->
<!--/slider-->
<script src="{{ asset('/') }}/frontend_css_js/js/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/modernizr-2.6.2.min.js"></script>
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
<!-- //js -->
<script src="{{ asset('/') }}/frontend_css_js/js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="{{ asset('/') }}/frontend_css_js/js/move-top.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js/easing.js"></script>

<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/') }}/frontend_css_js/js1/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/frontend_css_js/js1/custom.js"></script>
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
