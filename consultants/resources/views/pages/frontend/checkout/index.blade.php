

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
                <li>مرحلة الدفع</li>
            </ol>
            <h2>مرحلة الدفع</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="row">

        <section class="col-md-8 inner-page">
            <div class=" container" data-aos="fade-up">

                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">إختيار وسيلة دفع</h4>
                    <hr>
{{--                    <div class="col-md-12 ">--}}
{{--                        <div class="info-box d-md-flex justify-content-between">--}}
{{--                            <h3>1-</h3>--}}
{{--                            <h3>saw.com <i class="ri-global-fill" style="font-size: 1.2rem"></i></h3>--}}
{{--                            <h3>Year/9.99 $US</h3>--}}

{{--                            <a href="#" class="btn-buy" style="color:#636464 "><i class="ri-delete-bin-2-line" style="font-size: 1.7rem"></i> </a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr>--}}

                </div>



            </div>
        </section>

        <section id="services" class="col-md-4 services">

            <div class="container " data-aos="fade-up">



                <div class="row gy-4">




                    <div  data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box ">


                            <ul class="mb-20">

                                <li class="d-flex align-items-center justify-content-center">
                                    <strong class="small font-weight-bold">معلومات الطلب الخاص بك</strong>
                                </li><hr>

                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">المبلغ الفرعي</strong>
                                    <span class="text-muted small">$ 20</span>
                                </li><hr>


                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">الخصم<small>(saw)</small></strong>
                                    <span class="text-muted small">- $ 20</span>
                                </li><hr>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">الضريبة</strong>
                                    <span class="text-muted small">$ 0</span>
                                </li><hr>
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold">المبلغ</strong>
                                    <span class="text-muted small">$ 55</span>
                                </li><hr>

                                <li class="row d-flex align-items-center justify-content-center">

                                    <form>

                                           <div class="col-12">
                                               <input type="text" class="form-control " placeholder="أدخل الكوبون الخاص بك إن وجد">

                                           </div>

                                        <br>
{{--                                        @if(session()->has('coupon'))--}}
{{--                                            <button type="button" wire:click.prevent="removeCoupon()" class="btn btn-danger btn-sm btn-block">--}}
{{--                                                <i class="fas fa-gift mr-2"></i> {{trans('site.Remove_coupon')}}--}}
{{--                                            </button>--}}
{{--                                        @else--}}

                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn btn-dark btn-sm btn-block">
                                                <i class="ri-gift-fill mr-2" ></i> تأكيد الكوبون
                                            </button>
                                        </div>

{{--                                        @endif--}}

                                    </form>

                                </li>





                            </ul>


                        </div>
                    </div>


                </div>

            </div>

        </section>
    </div>


@endsection
