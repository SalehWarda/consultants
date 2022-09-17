

@extends('layouts.app')

@section('title')
    {{trans('site.About_Us')}}
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>{{trans('site.About_Us')}}</li>
            </ol>
            <h2>{{trans('site.About_Us')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>{{trans('site.Get_to_know_us')}}</p>
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
