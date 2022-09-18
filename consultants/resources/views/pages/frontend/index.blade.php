

@extends('layouts.app')

@section('title')
    {{trans('site.Home')}}-{{trans('site.Holla')}}
@endsection

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">

            @if(app()->getLocale() == 'ar')
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">نحن نقدم حلولاً عصرية لتنمية أعمالك</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">نحن فريق من المصممين الموهوبين نصنع مواقع الويب باستخدام أحدث التقنيات</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-end">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span >{{trans('site.Lets_Go')}}</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @else

                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">We provide modern solutions to grow your business</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We are a team of talented designers making websites using the latest technology</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-end">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-end align-self-center">
                                <span >{{trans('site.Lets_Go')}}</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            @endif
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/site/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

@section('content')


    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                @if(app()->getLocale() == 'ar')
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>{{trans('site.Get_to_know_us')}}</h3>
                        <h2>نحن أحد منتجات حلة لتقنية المعلومات التي تم  تأسيسها وبناؤها لتخدم المدربين والمستشارين والمحامون ولكل من يقدم الخدمات.</h2>
                      <br>
                        <div class="text-center text-lg-end">
                            <a href="{{route('site.about')}}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>{{trans('site.Read_More')}}</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>{{trans('site.Get_to_know_us')}}</h3>
                            <h2>We are one of Hilla's IT products that was established and built to serve trainers, consultants, lawyers and everyone who provides services.</h2>
                            <br>
                            <div class="text-center text-lg-end">
                                <a href="{{route('site.about')}}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>{{trans('site.Read_More')}}</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('assets/site/img/about.jpg')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>
    <!-- End About Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <div class="d-flex">
                                <span data-purecounter-start="0" data-purecounter-end="100"  data-purecounter-duration="1" class="purecounter"></span>
                                <h3 style="color: #0b198f"> %</h3>

                            </div>
                            <p>{{trans('site.Happy_Customers')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #ee6c20;"></i>
                        <div>
                            <div class="d-flex">
                                <span data-purecounter-start="0" data-purecounter-end="600"  data-purecounter-duration="1" class="purecounter"></span>
                                <h3 style="color: #0b198f"> %</h3>

                            </div>
                            <p> {{trans('site.Bigger_fan_base')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-alarm" style="color: #bb0852;"></i>
                        <div>
                            <div class="d-flex">
                                <span data-purecounter-start="0" data-purecounter-end="60"  data-purecounter-duration="1" class="purecounter"></span>
                                <h3 style="color: #0b198f"> %</h3>

                            </div>
                            <p> {{trans('site.Save_wasted_time')}}</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Counts Section -->



    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{trans('site.Services')}}</h2>
                <p>{{trans('site.Browse_services')}}</p>
            </header>

         <livewire:frontend.packages-component :packages="$packages" />

        </div>

    </section>
    <!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{trans('site.Contact_Us')}}</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>{{trans('site.Address')}}</h3>
                                <p>{{$contact->address}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>{{trans('site.Contact_Us')}}</h3>
                                <p ><a href="tel:{{$contact->mobile}}" style="color: black">{{$contact->mobile}}</a></p>
                            </div>
                        </div>
                        <div class="col-md-12" >
                            <div class="info-box ">
                                <i class="bi bi-envelope"></i>
                                <h3>{{trans('site.Email')}}</h3>
                                <p><a href="mailto:{{$contact->email}}" style="color: black">{{$contact->email}}</a></p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6">
                    @include('partials.alert.alert')
                    <form action="{{route('site.contact_store')}}" method="post" class="btn-login">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="{{trans('site.Full_name')}}" >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="{{trans('site.Email')}}" >
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="{{trans('site.Subject')}}" >
                                @error('subject')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="{{trans('site.Message')}}" ></textarea>
                                @error('message')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 text-center">

                                <button type="submit">{{trans('site.Send')}}</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

@endsection
