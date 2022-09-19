
@extends('layouts.admin')

@section('title')
    {{trans('dashboard.Home')}}
@endsection


@section('content')


    <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{trans('dashboard.Dashboard')}}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('dashboard.Home')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans('dashboard.statistics')}}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">{{trans('dashboard.Mail')}}</p>
                                        <h4 class="mb-2">{{$mails->count()}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i></span>{{trans('dashboard.Number_of_messages_received')}}</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-message-2-line font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">{{trans('dashboard.Total_discount_coupons')}}</p>
                                        <h4 class="mb-2">{{$coupons->count()}}</h4>
                                        <p class="text-muted mb-0"><span class="text-dark fw-bold font-size-12 me-2"><i class="ri-coupon-2-fill me-1 align-middle"></i> ({{$coupons->count()}})</span>{{trans('dashboard.Total_activated_coupons')}}</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-danger rounded-3">
                                                    <i class="ri-coupon-2-fill font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">{{trans('dashboard.Total_packages')}}</p>
                                        <h4 class="mb-2">{{$packages->count()}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></span>{{trans('dashboard.The_full_number_of_packages')}}</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-award-fill font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->



                <livewire:backend.statistics-component/>


                <livewire:backend.chart-component/>
            </div>

        </div>
        <!-- End Page-content -->
@endsection
