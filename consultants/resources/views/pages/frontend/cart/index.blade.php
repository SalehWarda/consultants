

@extends('layouts.app')

@section('title')
    {{trans('site.Cart')}}
@endsection


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container d-flex justify-content-between">

            <ol>
                <li><a href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                <li > {{trans('site.Cart')}}</li>
            </ol>
            <h2>{{trans('site.Cart')}} </h2>

        </div>
    </section><!-- End Breadcrumbs -->



    <div class="row">

        <section class="col-md-8 inner-page">
            <div class=" container" data-aos="fade-up">

                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">{{trans('site.Order_Summary')}}</h4>
                    <hr>

                    @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)


                        <livewire:frontend.cart-item-component :item="$item->rowId" :key="$item->rowId"/>
                    @empty

                        <tr>
                            <td class="pl-0 border-light" colspan="6">
                                <p class="text-center">{{trans('site.There_are_no_order_in_the_cart')}}.</p>
                            </td>

                        </tr>
                    @endforelse



                </div>



            </div>
        </section>

        <section id="services" class="col-md-4 services">

        <livewire:frontend.cart-total-component/>

        </section>
    </div>


@endsection
