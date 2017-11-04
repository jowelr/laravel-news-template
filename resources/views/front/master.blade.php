<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from rstheme.com/products/news24/news-magazine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2017 20:09:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News 24 | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/front') }}/{{ asset('/front') }}/images/fav.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/animate.css">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/hover-min.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/owl.carousel.css">
    <!-- lightbox css -->
    <link href="{{ asset('/front') }}/css/lightbox.min.css" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('/front') }}/inc/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/inc/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/responsive.css">
    <!-- modernizr js -->
    <script src="{{ asset('/front') }}/js/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">
<!--Preloader area Start here-->
<div class="preloader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!--Preloader area end here-->

<!--Header area start here-->
<header>
    @include('front.includes.menu')
</header>
<!--Header area end here-->
<!-- Slider Section Start Here -->
@yield('content')
<!-- All News Section end Here -->
<!-- Footer Area Section Start Here -->

<footer>
    @include('front.includes.footer')
    <!-- Footer Copyright Area End Here -->
</footer>

<!-- Start scrollUp  -->
<div id="return-to-top">
    <span>Top</span>
</div>
<!-- End scrollUp  -->

<!-- Footer Area Section End Here -->

<!-- all js here -->
<script src="{{ asset('/front') }}/js/jquery.min.js"></script>
<!-- jquery latest version -->
<script src="{{ asset('/front') }}/js/jquery.min.js"></script>
<!-- jquery-ui js -->
<script src="{{ asset('/front') }}/js/jquery-ui.min.js"></script>
<!-- bootstrap js -->
<script src="{{ asset('/front') }}/js/bootstrap.min.js"></script>
<!-- meanmenu js -->
<script src="{{ asset('/front') }}/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="{{ asset('/front') }}/js/wow.min.js"></script>
<!-- owl.carousel js -->
<script src="{{ asset('/front') }}/js/owl.carousel.min.js"></script>
<!-- magnific-popup js -->
<script src="{{ asset('/front') }}/js/jquery.magnific-popup.js"></script>

<!-- jquery.counterup js -->
<script src="{{ asset('/front') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('/front') }}/js/waypoints.min.js"></script>
<!-- jquery light box -->
<script src="{{ asset('/front') }}/js/lightbox.min.js"></script>
<!-- Nivo slider js -->
<script src="{{ asset('/front') }}/inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="{{ asset('/front') }}/inc/custom-slider/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="{{ asset('/front') }}/js/main.js"></script>
</body>


<!-- Mirrored from rstheme.com/products/news24/news-magazine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2017 20:11:47 GMT -->
</html>
