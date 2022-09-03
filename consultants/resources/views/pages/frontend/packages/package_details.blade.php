

@extends('layouts.app')

@section('title')
    تفاصيل الباقة
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li>تفاصيل الباقة</li>
            </ol>
            <h2>تفاصيل الباقة</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section class="col-md-8 inner-page" x-data="{ showSearch: false, showInputExistingDomain: false }">
            <div class=" container" data-aos="fade-up">

                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">2. إتصال الدومين الخاص بك</h4>
                    <h6 class="alert-heading">ربط الدومين بخطة الباقة الخاصة بك.</h6>
                    <br>
                    <br>
                    <h6 class="alert-heading">إتصل ب:</h6>


                    <div class="col-md-12 ">
                        <div class="form-check" >
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label x-on:click="showSearch = ! showSearch"  class="form-check-label" for="flexRadioDefault1">
                               <span><h6 class="alert-heading"> إسم دومين جديد</h6></span>
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                            <label x-on:click="showInputExistingDomain = ! showInputExistingDomain" class="form-check-label " for="flexRadioDefault2">
                                <span><h6 class="alert-heading">إسم دومين موجود</h6></span>
                            </label>
                        </div>
                    </div>


                </div>

                <section class="inner-page" x-show="showSearch" x-on:click.away="showSearch = false">
                    <h4 style="margin-right: 20px">إسم دومين جديد</h4>
                    <hr>
                    <div class="container">
                        <footer id="footer" class="footer" >
                            <div class="footer-newsletter">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <h4>استخدم فاحص الدومين للبحث عن الدومينات المتاحة</h4>
                                            <p>فقط اكتب اسم الدومين الذي تريده واكتشف على الفور إن كان متوفرا.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <form action="" method="post">
                                                <input type="email" name="email" placeholder="إبحث عن إسم الدومين المطلوب">
                                                <input type="submit" value="بحث">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </footer>
                        <br>
                        <br>
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">هذا المجال متاح!</h4>
                            <hr>
                            <div class="col-md-12 ">
                                <div class="info-box d-md-flex justify-content-between">
                                    <h3>saw.com</h3>
                                    <h3>Year/9.99 $US</h3>
                                    <div class="pricing">
                                        <a href="#" class="btn-buy" >إضافة إلى السلة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">هذا المجال مأخوذ!</h4>
                            <hr>
                            <div class="col-md-12 ">
                                <div class="info-box d-md-flex justify-content-between">
                                    <h3>saw.com</h3>


                                    <h5>عذرا, هذا المجال مأخوذ بالفعل</h5>

                                </div>
                            </div>
                        </div>


                    </div>
                </section>

                <section class="inner-page" x-show="showInputExistingDomain" x-on:click.away="showInputExistingDomain = false">
                    <h4 style="margin-right: 20px">إسم دومين موجود</h4>
                    <hr>
                    <div class="container">
                        <footer id="footer" class="footer" >
                            <div class="footer-newsletter">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <h4>فقط اكتب اسم الدومين الخاص بك ليتم ربطه بالباقة</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <form action="" method="post">
                                                <input type="email" name="email" placeholder="أدخل اسم الدومين الخاص بك">
                                                <input type="submit" value="ربط الدومين">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </footer>


                    </div>
                </section>

            </div>
        </section>

        <section id="services" class="col-md-4 services">

            <div class="container " data-aos="fade-up">



                <div class="row gy-4">




                    <div  data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box ">
                            <i class="ri-global-line icon"></i>

                            <ul class="mb-20">
                                <li class="d-flex align-items-center justify-content-center">
                                    <strong class="small font-weight-bold">معلومات الباقة الخاصة بك</strong>
                                </li><hr>

                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">مساحة القرص</strong>
                                    <span class="text-muted small"> 20G SSD</span>
                                </li><hr>


                                {{--                                <li class="d-flex align-items-center justify-content-between">--}}
                                {{--                                    <strong class="small font-weight-bold">الخصم<small>(saw)</small></strong>--}}
                                {{--                                    <span class="text-muted small">- $ 20</span>--}}
                                {{--                                </li><hr>--}}
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">عدد المواقع</strong>
                                    <span class="text-muted small">50 موقع</span>
                                </li><hr>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">كمية نقل البيانات</strong>
                                    <span class="text-muted small">غير محدودة</span>
                                </li><hr>





                            </ul>


                        </div>
                    </div>


                </div>

            </div>

        </section>
    </div>


@endsection
