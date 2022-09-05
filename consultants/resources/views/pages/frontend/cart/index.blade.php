

@extends('layouts.app')

@section('title')
    سلة المشتريات
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                <li>سلة المشتريات</li>
            </ol>
            <h2>سلة المشتريات</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section class="col-md-8 inner-page">
            <div class=" container" data-aos="fade-up">

                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">ملخص الطلب</h4>
                    <hr>

{{--                    @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)--}}

{{--                        <div class="col-md-12 ">--}}
{{--                            <div class="info-box d-md-flex justify-content-between">--}}
{{--                                <h3>1-</h3>--}}
{{--                                <h3>{{$item->name}} <i class="ri-global-fill" style="font-size: 1.2rem"></i></h3>--}}
{{--                                <h3>{{$item->price}} $US</h3>--}}

{{--                                <a href="#" class="btn-buy" style="color:#636464 "><i class="ri-delete-bin-2-line" style="font-size: 1.7rem"></i> </a>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @empty--}}
{{--                    @endforelse--}}
                    <div class="col-md-12 ">
                        <div class="info-box d-md-flex justify-content-between">
                            <h3>1-</h3>
                            <h3>saw.com <i class="ri-global-fill" style="font-size: 1.2rem"></i></h3>
                            <h3>Year/9.99 $US</h3>

                            <a href="#" class="btn-buy" style="color:#636464 "><i class="ri-delete-bin-2-line" style="font-size: 1.7rem"></i> </a>

                        </div>
                    </div>
                    <hr>

                </div>



            </div>
        </section>

        <section id="services" class="col-md-4 services">

            <div class="container " data-aos="fade-up">



                <div class="row gy-4">




                    <div  data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box ">
                            <i class="ri-shopping-cart-line icon"></i>

                            <ul class="mb-20">

                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">المبلغ الفرعي</strong>
                                    <span class="text-muted small"> $ 20</span>
                                </li><hr>


{{--                                <li class="d-flex align-items-center justify-content-between">--}}
{{--                                    <strong class="small font-weight-bold">الخصم<small>(saw)</small></strong>--}}
{{--                                    <span class="text-muted small">- $ 20</span>--}}
{{--                                </li><hr>--}}
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">الضريبة</strong>
                                    <span class="text-muted small">$ 0</span>
                                </li><hr>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">المبلغ</strong>
                                    <span class="text-muted small">$ 55</span>
                                </li><hr>

                                <li class="navbar d-flex justify-content-center"><a class="getstarted scrollto" href="{{route('site.checkout')}}" style="background: #242632">الذهاب لإتمام الدفع</a></li>



                                {{--                                    <li class="align-items-center justify-content-center mb-4">--}}
                                {{--                                        <span>السلة الخاصة بك فارغة!</span>--}}
                                {{--                                    </li>--}}

                            </ul>


                        </div>
                    </div>


                </div>

            </div>

        </section>
    </div>


@endsection
