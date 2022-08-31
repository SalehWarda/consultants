

@extends('layouts.app')

@section('title')
    تسجيل الدخول
@endsection
@section('content')



  <br>
  <br>
  <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">



            <div class="row gy-4">



                <div class="col-lg-6">
                    @include('partials.alert.alert')
                    <form action="{{route('site.login.user')}}" method="post" class="btn-login" >
                        @csrf
                        <header class="section-header">
                            <p>تسجيل الدخول</p>
                        </header>
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="password" class="form-control" name="password" placeholder="كلمة المرور" >
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>



                            <div class="col-md-12 text-center">


                                <button type="submit">دخول</button>
                            </div>

                        </div>
                    </form>

                </div>

                <div class="col-lg-6">

                    <form action="{{route('site.register.user')}}" method="post" class="btn-login">
                        @csrf
                        <header class="section-header">
                            <p>التسجيل في الموقع</p>
                        </header>
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الإسم كاملا" >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email_reg" placeholder="البريد الإلكتروني" >
                                @error('email_reg')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="job" placeholder="الوظيفة" >
                                @error('job')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                             <div class="col-md-6 ">
                                <input type="number" class="form-control" name="age" placeholder="العمر" >
                                 @error('age')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="mobile" placeholder="رقم الهاتف" >
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="password" class="form-control" name="password_reg" placeholder="كلمة المرور" >
                                @error('password_reg')
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


                                <button type="submit">تسجيل</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
    <!-- End Contact Section -->

@endsection
