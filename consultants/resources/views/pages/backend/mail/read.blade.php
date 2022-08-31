@extends('layouts.admin')

@section('title')
    تفاصيل البريد الوارد
@endsection

@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">قراءة البريد الوارد</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                                <li class="breadcrumb-item active">قراءة البريد الوارد</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">


                    <!-- Right Sidebar -->


                    <div class="card">


                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <div class="flex-1">
                                    <h3 class="my-1">{{$mails->subject}}</h3>
                                    <small class="text-muted">التاريخ: {{$mails->created_at->format('M d, Y H:i a')}} ({{$mails->created_at->diffForHumans()}})</small>

                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="flex-1">
                                    <h5 class="font-size-14 my-1">الإسم: {{$mails->name}}</h5>

                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="flex-1">
                                    <h5 class="font-size-14 my-1">البريد الإلكتروني: {{$mails->email}}</h5>
                                </div>
                            </div>

                            <h4 class="font-size-16">الرسالة:</h4>

                            <p>{{$mails->message}}</p>

                            <hr/>



                            {{--                                <a href="javascript: void(0);" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> Reply</a>--}}
                        </div>

                    </div>

                    <!-- card -->

                </div>
                <!-- end Col-9 -->

            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
