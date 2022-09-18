

@extends('layouts.app')

@section('title')
    الملف الشخصي
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li>الملف الشخصي</li>
            </ol>
            <h2 >{{auth('web')->user()->name}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <p>الملف الشخصي</p>
                    </header>

                    <div class="row gy-4">

                        <div class="col-lg-4">

                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="info-box d-flex justify-content-start" >
                                        <i class="bi bi-list"></i>
                                        <h3 class="mt-2" style="margin-right: 10px;" >قائمتك</h3>



                                    </div>
                                    <div class=" info-box feture-tabs" data-aos="fade-up">
                                        <div class="col-lg-6">

                                            <!-- Tabs -->
                                            <ul class="nav nav-pills mb-3 justify-content-start">
                                                <li>
                                                    <a class="nav-link mb-3 active" data-bs-toggle="pill" href="#tab1"><i class="ri-user-line" style="font-size: 1.2rem; color: black"></i><span style="color: black; font-size: 1.2rem; margin-right: 10px;">بياناتك </span></a>
                                                </li>

                                                <li>
                                                    <a class="nav-link" data-bs-toggle="pill" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-logout-box-line" style="font-size: 1.2rem; color: black"></i><span style="color: black; font-size: 1.2rem; margin-right: 10px;"> خروج</span></a>
                                                    <form action="{{ route('site.logout.user') }}" method="post" id="logout-form"
                                                          class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul><!-- End Tabs -->



                                        </div>



                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class=" tab-content col-lg-8">
                            <div class="tab-pane fade show active" id="tab1">

                                <form action="{{route('site.customer.update_profile')}}" method="post" class="btn-login">
                                    @method('PATCH')
                                    @csrf
                                    <header class="section-header">
                                        <p>المعلومات الشخصية</p>
                                    </header>
                                    <div class="row gy-4">

                                        <div class="col-md-6">
                                            <p>الاسم كاملا:</p>
                                            <input type="text" name="name" class="form-control" value="{{auth('web')->user()->name}}" placeholder="الإسم كاملا" >
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 ">
                                            <p>البريد الإلكتروني:</p>
                                            <input type="email" class="form-control" name="email" value="{{auth('web')->user()->email}}" placeholder="البريد الإلكتروني" >
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 ">
                                            <p>الوظيفة:</p>
                                            <input type="text" class="form-control" name="job" value="{{auth('web')->user()->job}}" placeholder="الوظيفة" >
                                            @error('job')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 ">
                                            <p>العمر:</p>
                                            <input type="number" class="form-control" name="age" value="{{auth('web')->user()->age}}" placeholder="العمر" >
                                            @error('age')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <p>رقم الهاتف:</p>
                                            <input type="text" class="form-control" name="mobile" value="{{auth('web')->user()->mobile}}" placeholder="رقم الهاتف" >
                                            @error('mobile')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 ">
                                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" >
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 ">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمة المرور" >
                                            @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>



                                        <div class="col-md-12 text-center">


                                            <button type="submit">حفظ التغييرات</button>
                                        </div>

                                    </div>
                                </form>

                            </div>




                        </div>

                    </div>

                </div>

            </section><!-- End Contact Section -->
        </div>
    </section>


@endsection
