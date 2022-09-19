

@extends('layouts.app')

@section('title')
    {{trans('site.Register_on_the_site')}}
@endsection
@section('content')



    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>{{trans('site.Register_on_the_site')}}</li>
            </ol>
            <h2>{{trans('site.Register_on_the_site')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

  <br>
  <br>
  <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">



            <div class="row gy-4 justify-content-center">





                <div class="col-lg-6">

                    <form action="{{route('site.register.user')}}" method="post" class="btn-login">
                        @csrf
                        <header class="section-header">
                            <p>{{trans('site.Register_on_the_site')}}</p>
                        </header>
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="{{trans('site.Full_name')}}" >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email_reg" placeholder="{{trans('site.Email')}}" >
                                @error('email_reg')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="job" placeholder="{{trans('site.Job')}}" >
                                @error('job')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                             <div class="col-md-6 ">
                                <input type="number" class="form-control" name="age" placeholder="{{trans('site.Age')}}" >
                                 @error('age')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="mobile" placeholder="{{trans('site.Mobile')}} " >
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="password" class="form-control" name="password_reg" placeholder="{{trans('site.Password')}}" >
                                @error('password_reg')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="{{trans('site.Password_Confirmation')}}" >
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>



                            <div class="col-md-12 text-center">


                                <button type="submit">{{trans('site.Register')}}</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
    <!-- End Contact Section -->

@endsection
