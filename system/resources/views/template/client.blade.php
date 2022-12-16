<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Bea Cukai Ketapang</title>

    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/client/stylesheet/bootstrap.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/client/stylesheet/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/client/stylesheet/responsive.css">

    <!-- icoomon font -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/client/stylesheet/icomoon.css">

    <!-- Favicon and touch icons  -->
    <link href="{{ url('public') }}/client/icon/Favicon.png" rel="apple-touch-icon-precomposed">
    <link href="{{ url('public') }}/client/icon/Favicon.png" rel="apple-touch-icon-precomposed">
    <link href="{{ url('public') }}/client/icon/Favicon.png" rel="shortcut icon">
    <!-- Slide Iklan -->
    <link rel="stylesheet" href="{{ url('public') }}/client/rev-slider/css/slide.css">

    <!-- anime -->
    <link rel="stylesheet" href="{{ url('public') }}/client/stylesheet/animate.css">

</head>

<body>
    <div class="boxed blog">

        <!-- Preloader -->

        @include('section.front.header')
        <!-- page title -->
        <div class="page-wrapper">
            <div class="page-content">

                @yield('content')


            </div>
        </div>
        <!-- footer -->
        @include('section.front.footer')
        <!-- / footer -->

        <!-- btn go top -->
        <div class="button-go-top">
            <a href="/#" title="" class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        <!-- / btn go top -->
    </div>
    <!-- /.boxed -->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/jquery.min.js"></script>
    <script src="{{ url('public') }}/client/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/countto.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/wow.min.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/client/javascript/main.js"></script>
    <!-- /javascript -->

    <!-- slider -->
    <script src="{{ url('public') }}/client/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ url('public') }}/client/rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('public') }}/client/javascript/rev-slider.js"></script>
{{-- anjay --}}
    <script src="{{ url('public') }}/client/rev-slider/js/java.js"></script>


    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js">
    </script>
    <script src="{{ url('public') }}/client/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>

</body>

</html>
