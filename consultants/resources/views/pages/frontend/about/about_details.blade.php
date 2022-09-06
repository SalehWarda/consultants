

@extends('layouts.app')

@section('title')
    نبذة عنا
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li>نبذة عنا</li>
            </ol>
            <h2>نبذة عنا</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>تفاصيل أكثر عنا</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-info-circle-fill" style="color:#012970 "></i>
                                    <h3>{{$about->title_one}}</h3>
                                    <p>{!! $about->body_one !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-bookmark-star-fill" style="color:#012970 "></i>
                                    <h3>{{$about->title_tow}}</h3>
                                    <p>{!! $about->body_tow !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="info-box ">
                                    <i class="bi bi-award-fill" style="color:#012970 "></i>
                                    <h3>{{$about->title_three}}</h3>
                                    <p>{!! $about->body_three !!}</p>
                                </div>
                            </div>

                            <div class="col-md-6" >
                                <div class="info-box ">
                                    <i class="bi bi-lightbulb-fill" style="color:#012970 "></i>
                                    <h3>{{$about->title_four}}</h3>
                                    <p>{!! $about->body_four !!}</p>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </section>

    </div>


@endsection
