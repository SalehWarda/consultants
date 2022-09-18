@extends('layouts.admin')

@section('title')
    الملف الشخصي
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> الملف الشخصي</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"> الملف الشخصي</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('site.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin.update.profile')}}" method="post">
                                @method('PATCH')
                                @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name_ar" class="col-sm-2 col-form-label">الإسم :</label>
                                    <input class="form-control" type="text"
                                            name="name"
                                           value="{{auth('admin')->user()->name}}"
                                           id="name">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>



                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="col-sm-2 col-form-label">

                                        البريد الإلكتروني:</label>
                                    <input class="form-control" type="email"  name="email"
                                           value="{{auth('admin')->user()->email}}"
                                           id="email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-sm-2 col-form-label">
                                        الهاتف:</label>
                                    <input class="form-control" type="text" name="mobile"
                                           value="{{auth('admin')->user()->mobile}}"
                                           id="mobile">
                                    @error('mobile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="col-sm-2 col-form-label">كلمة السر:</label>
                                    <input class="form-control" type="password" name="password"  id="password">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">تأكيد كلمة السر:</label>
                                    <input class="form-control" type="password" name="password_confirmation"  id="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>



                            </div>
                            <br>



                            <button class="btn ripple btn-secondary m-lg-2" type="submit" >
                                حفظ التعديلات<i
                                    class="fe fe-plus"></i></button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

