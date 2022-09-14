

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
                    <div class="col-md-12 ">
                        <div class="info-box d-md-flex justify-content-between">

                            <form action="{{route('site.checkout.payment')}}" method="post" >
                                @csrf
                                <img src="{{asset('assets/images/clickpay-logo.svg')}}" width="80"><br><br>
                                <button type="submit" style="background-color: #000000; color: white; border-radius: 12px; margin-bottom: 3px" ><i class="bi bi-currency-exchange" style="font-size: 1.2rem"></i> دفع الان </button>


                            </form>

                        </div>
                    </div>
                    <hr>

                </div>



            </div>
        </section>

        <section id="services" class="col-md-4 services">

           <livewire:frontend.checkout-component/>

        </section>
    </div>


@endsection
