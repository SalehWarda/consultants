<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/site/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/site/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/site/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/site/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/site/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart - v1.10.1
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @livewireStyles

</head>

<body>

<!-- ======= Header ======= -->
@include('partials.site.header')
<!-- End Header -->

<main id="main">

    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
   @include('partials.site.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/site/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/site/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/site/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/site/js/main.js')}}"></script>
@livewireScripts

</body>

</html>
