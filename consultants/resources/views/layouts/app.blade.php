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
</head>

<body>

<!-- ======= Header ======= -->
@include('partials.site.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">نحن نقدم حلولاً عصرية لتنمية أعمالك</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">نحن فريق من المصممين الموهوبين نصنع مواقع الويب باستخدام أحدث التقنيات</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>هيا لنبدأ</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/site/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

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

</body>

</html>
