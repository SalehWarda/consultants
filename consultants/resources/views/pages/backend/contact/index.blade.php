@extends('layouts.admin')

@section('title')
    معلومات التواصل
@endsection

@section('style')


@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">معلومات التواصل</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <h4 class="mb-sm-0">معلومات التواصل</h4>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{--                            <div class="d-block d-md-flex justify-content-between">--}}
                            {{--                                <div class="d-block">--}}
                            {{--                                    <a href=""--}}
                            {{--                                       class="btn btn-outline-success waves-effect waves-light btn-rounded"--}}
                            {{--                                    >رجوع <i class="fa fa-arrow-circle-right"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <br>


                            <form action="{{route('admin.contact.update')}}" method="post" >

                                @csrf
                                @method('PATCH')
                                <input type="hidden" value="{{$contact->id}}" name="contact_id">







                                <div class="row">
                                    <div class="col-6">
                                        <label for="email"
                                               class="col-sm-2 col-form-label">البريد الإلكتروني:</label>
                                        <input class="form-control" type="text"
                                               value="{{$contact->email}}" name="email"
                                               id="email">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="mobile"
                                               class="col-sm-2 col-form-label">رقم الهاتف:</label>
                                        <input class="form-control" type="text"
                                               value="{{$contact->mobile}}" name="mobile"
                                               id="mobile">
                                        @error('mobile')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>


                                </div>
                                <br>




                                <button class="btn ripple btn-secondary m-lg-2" type="submit">
                                   حفظ التغييرات<i
                                        class="fe fe-plus"></i></button>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
