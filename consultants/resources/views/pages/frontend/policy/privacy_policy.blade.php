

@extends('layouts.app')

@section('title')
    بيان الخصوصية
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>بيان الخصوصية</li>
            </ol>
            <h2>بيان الخصوصية</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>بيان الخصوصية</p>
                </header>

                <div class="row gy-4 d-flex justify-content-between" >

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bi bi-info-circle-fill" style="color:#012970 "></i>
                                    <h3>{{$privacy->privacy_policy}}</h3>
                                </div>
                            </div>


                        </div>

                    </div>



                </div>

            </div>

        </section>

    </div>


@endsection
