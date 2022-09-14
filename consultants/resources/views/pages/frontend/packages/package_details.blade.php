

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

       <livewire:frontend.domain-checker-componenet/>
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
                                    <strong class="small font-weight-bold">إسم الباقة</strong>
                                    <span class="text-muted small"> {{$package->title}}</span>
                                </li><hr>


                                {{--                                <li class="d-flex align-items-center justify-content-between">--}}
                                {{--                                    <strong class="small font-weight-bold">الخصم<small>(saw)</small></strong>--}}
                                {{--                                    <span class="text-muted small">- $ 20</span>--}}
                                {{--                                </li><hr>--}}
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">سعر الباقة</strong>
                                    <span class="text-muted small">USD {{$package->price}} /{{$package->time_period}}</span>
                                </li><hr>


                                <li class="d-flex align-items-center justify-content-center">
                                    <strong class="small font-weight-bold">مزايا الباقة</strong>
                                </li>
                                <br>
                                <li class="d-flex align-items-center justify-content-between">

                                    <span class="text-muted small">{!! $package->features !!}</span>
                                </li><hr>





                            </ul>


                        </div>
                    </div>


                </div>

            </div>

        </section>
    </div>


@endsection
