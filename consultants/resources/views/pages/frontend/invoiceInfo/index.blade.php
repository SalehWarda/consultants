@extends('layouts.app')
@section('style')

    <link href="{{asset('assets/site/invoice/css/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/site/invoice/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>


@endsection

@section('title')
    {{trans('site.Transaction_details')}}
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li>{{trans('site.Transaction_details')}}</li>
            </ol>
            <h2>{{trans('site.Transaction_details')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->



    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">
            <div class="row invoice layout-top-spacing layout-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                    <div class="row">

                        <div class="col-xl-9">

                            <div class="invoice-container">
                                <div class="invoice-inbox">

                                    <div id="ct" class="">

                                        <div class="invoice-00001">
                                            <div class="content-section">

                                                <div class="inv--head-section inv--detail-section">

                                                    <div class="row">

                                                        <div class="col-sm-6 col-12 mr-auto">
                                                            <div class="d-flex">
                                                                <img class="company-logo"
                                                                     src="{{asset('assets/images/hulla1.png')}}"
                                                                     width="100" alt="company">
                                                                <h3 class="in-heading align-self-center">{{trans('site.Holla')}}</h3>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 text-sm-right">
                                                            <p class="inv-list-number"><span class="inv-title">{{trans('site.Transaction_code')}} : </span>
                                                                <span
                                                                    class="inv-number">#{{$response['tran_ref'] ?? ''}}</span>
                                                            </p>
                                                        </div>

                                                        <div class="col-sm-6 align-self-center mt-3">
                                                            <p class="inv-street-addr">السعودية-الرياض</p>
                                                            <p class="inv-email-address">info@holla.sa</p>
                                                            <p class="inv-email-address">(120) 456 789</p>
                                                        </div>
                                                        <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                            <p class="inv-created-date"><span class="inv-title">{{trans('site.Today_date')}} : </span>
                                                                <span class="inv-date">{{date('Y M,d')}}</span></p>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="inv--detail-section inv--customer-detail-section">

                                                    <div class="row">

                                                        <div
                                                            class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">{{trans('site.Your_order')}}:</p>
                                                        </div>


                                                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                            <p class="inv-customer-name">{{$response['customer_details']['name'] ?? ''}}</p>
                                                            <p class="inv-street-addr">{{$response['customer_details']['email'] ?? ''}}</p>
                                                            <p class="inv-email-address">{{$response['customer_details']['phone'] ?? ''}}</p>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="inv--product-table-section">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="">


                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">{{trans('site.Order_code')}}</th>
                                                                <th class="text-right" scope="col">{{trans('site.Price')}}</th>
                                                            </tr>


                                                            </thead>
                                                            <tbody>

                                                            <tr>
                                                                <td>1</td>
                                                                <td>{{$response['cart_id'] ?? ''}}</td>
                                                                <td class="text-right">{{$response['cart_amount'] ?? ''}}
                                                                    /{{$response['cart_currency'] ?? ''}}</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="inv--product-table-section">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="">


                                                            <tr>
                                                                <th ><span style="font-size: 15px">{{trans('site.Order_info')}}</span></th>
                                                                <th ></th>
                                                                <th ></th>

                                                            </tr>

                                                            <tr>

                                                                    <th scope="col">#</th>
                                                                    <th scope="col">{{trans('dashboard.Order')}}</th>
                                                                    <th class="text-right" scope="col">{{trans('site.Price')}}</th>


                                                            </tr>


                                                            </thead>
                                                            <tbody>
                                                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$item->name}}</td>
                                                                <td class="text-right">{{   $item->price}}</td>

                                                            </tr>
                                                            @endforeach

                                                            <tr>
                                                                <th ><span style="font-size: 15px"><strong style="color: red">{{trans('site.Note')}}: </strong> {{trans('site._your_own_logo_will_be_made_at_a_cost_of_700_Saudi_riyals_added_to_the_order_price')}}.</span></th>
                                                                <th ></th>
                                                                <th ></th>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                <div class="inv--note">

                                                    <div class="row mt-4">
                                                        <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                            <p>{{trans('site.Note')}}: {{trans('site.Thank_you_for_dealing_with_us')}}</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="col-xl-3">

                            <div class="invoice-actions-btn">

                                <div class="invoice-action-btn">

                                    <div class="row">
                                        <div class="col-xl-12 col-md-3 col-sm-6">
                                            <img src="{{asset('assets/images/clickpay-logo.svg')}}" width="100"><br><br>
                                            <a href="{{$response['redirect_url'] ?? ''}}" class="btn btn-dark btn-send"><i
                                                    class="bi bi-currency-exchange" style="font-size: 1.2rem"></i> {{trans('site.Pay_now')}}</a>
                                        </div>
                                        <div class="col-xl-12 col-md-3 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-warning btn-print" onclick="window.print()"><i
                                                    class="bi bi-printer" style="font-size: 1.2rem"></i>{{trans('site.Print')}}</a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')

        <script src="{{asset('assets/site/invoice/js/libs/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('assets/site/invoice/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/site/invoice/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/site/invoice/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/site/invoice/js/app.js')}}"></script>

        <script>
            $(document).ready(function () {
                App.init();
            });
        </script>
        <script src="{{asset('assets/site/invoice/js/custom.js')}}"></script>
        <script src="{{asset('assets/site/invoice/js/apps/invoice-preview.js')}}"></script>



@endsection
