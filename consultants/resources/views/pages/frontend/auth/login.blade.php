

@extends('layouts.app')

@section('title')
    {{trans('site.Sign_in')}}
@endsection
@section('content')



    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>{{trans('site.Sign_in')}}</li>
            </ol>
            <h2>{{trans('site.Sign_in')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

  <br>
  <br>
  <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">



            <div class="row gy-4 justify-content-center">



                <div class="col-lg-6" >
                    @include('partials.alert.alert')
                    <form action="{{route('site.login.user')}}" method="post" class="btn-login" >
                        @csrf
                        <header class="section-header">
                            <p>{{trans('site.Sign_in')}}</p>
                        </header>
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="{{trans('site.Email')}}">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 ">
                                <input type="password" class="form-control" name="password" placeholder="{{trans('site.Password')}}" >
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>



                            <div class="col-md-12 text-center">


                                <button type="submit">{{trans('site.Login')}}</button>
                            </div>

                            <div class="col-md-12 text-center">


                                <a href="{{route('site.getRegister')}}" >هل أنت مستخدم جديد؟ سجل الأن</a>
                            </div>

                        </div>
                    </form>

                </div>

{{--                <div class="col-lg-6">--}}

{{--                    <form action="{{route('site.register.user')}}" method="post" class="btn-login">--}}
{{--                        @csrf--}}
{{--                        <header class="section-header">--}}
{{--                            <p>{{trans('site.Register_on_the_site')}}</p>--}}
{{--                        </header>--}}
{{--                        <div class="row gy-4">--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input type="text" name="name" class="form-control" placeholder="{{trans('site.Full_name')}}" >--}}
{{--                                @error('name')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6 ">--}}
{{--                                <input type="email" class="form-control" name="email_reg" placeholder="{{trans('site.Email')}}" >--}}
{{--                                @error('email_reg')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 ">--}}
{{--                                <input type="text" class="form-control" name="job" placeholder="{{trans('site.Job')}}" >--}}
{{--                                @error('job')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                             <div class="col-md-6 ">--}}
{{--                                <input type="number" class="form-control" name="age" placeholder="{{trans('site.Age')}}" >--}}
{{--                                 @error('age')--}}
{{--                                 <span class="text-danger">{{$message}}</span>--}}
{{--                                 @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <input type="text" class="form-control" name="mobile" placeholder="{{trans('site.Mobile')}} " >--}}
{{--                                @error('mobile')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 ">--}}
{{--                                <input type="password" class="form-control" name="password_reg" placeholder="{{trans('site.Password')}}" >--}}
{{--                                @error('password_reg')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 ">--}}
{{--                                <input type="password" class="form-control" name="password_confirmation" placeholder="{{trans('site.Confirm_the_coupon')}}" >--}}
{{--                                @error('password_confirmation')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}



{{--                            <div class="col-md-12 text-center">--}}


{{--                                <button type="submit">{{trans('site.Register')}}</button>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}

            </div>

        </div>

    </section>
    <!-- End Contact Section -->

@endsection
