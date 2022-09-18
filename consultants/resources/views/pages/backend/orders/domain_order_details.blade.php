@extends('layouts.admin')

@section('title')
    تفاصيل الباقة
@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">تفاصيل الباقة</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">تفاصيل الباقة</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h3>
                                            <p>{{$order->domain}}</p>
                                        </h3>
                                    </div>
                                    <hr>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>تفاصيل الباقة</strong></h3>
                                        </div>
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>

                                                    <tr>

                                                        <th> مزايا الباقة</th>
                                                        <th> السعر</th>
                                                        <th> المدة الزمنية</th>

                                                    </tr>
                                                    <tbody>
                                                        <tr>

{{--                                                            <td>{{$package->title}}</td>--}}
{{--                                                            <td>{{$package->price}}/ USD</td>--}}
{{--                                                            <td>{{$package->time_period}}</td>--}}


                                                        </tr>



                                                    </tbody>
                                                    </thead>
                                                    <tbody>



                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>








@endsection
