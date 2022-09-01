

@extends('layouts.app')

@section('title')
    الدومينات
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li>الدومينات</li>
            </ol>
            <h2>قسم الدومينات</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <footer id="footer" class="footer">
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



@endsection
