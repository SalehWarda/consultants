

@extends('layouts.app')

@section('title')
    {{trans('site.Package_details')}}
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>{{trans('site.Package_details')}}</li>
            </ol>
            <h2>{{trans('site.Package_details')}}</h2>

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
                                    <strong class="small font-weight-bold">{{trans('site.Your_package_information')}}</strong>
                                </li><hr>

                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">{{trans('site.Package_name')}}</strong>
                                    <span class="text-muted small"> {{$package->title}}</span>
                                </li><hr>


                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">{{trans('site.Package_price')}}</strong>
                                    <span class="text-muted small">USD {{$package->price}} /{{$package->time_period}}</span>
                                </li><hr>


                                <li class="d-flex align-items-center justify-content-center">
                                    <strong class="small font-weight-bold">{{trans('site.Package_Benefits')}}</strong>
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
