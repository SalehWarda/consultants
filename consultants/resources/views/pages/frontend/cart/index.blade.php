

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

                    @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)


                        <livewire:frontend.cart-item-component :item="$item->rowId" :key="$item->rowId"/>
                    @empty

                        <tr>
                            <td class="pl-0 border-light" colspan="6">
                                <p class="text-center">لا يوجد طلبات في السلة.</p>
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
