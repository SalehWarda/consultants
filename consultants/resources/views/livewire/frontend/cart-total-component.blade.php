<div>
    <div class="container " data-aos="fade-up">


        <div class="row gy-4">


            <div data-aos="fade-up" data-aos-delay="600">
                <div class="service-box ">
                    <i class="ri-shopping-cart-line icon"></i>

                    <ul class="mb-20">
                        @if ($cart_total != 0)
                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="small font-weight-bold">المبلغ الفرعي</strong>
                                <span class="text-muted small"> $ {{$cart_subtotal}}</span>
                            </li>
                            <hr>

                            @if(session()->has('coupon'))
                                <li class="d-flex align-items-center justify-content-between">
                                    <strong class="small font-weight-bold"> <small>({{ getNumbers()->get('discount_code') }})</small></strong>
                                    <span class="text-muted small"> $ - {{$cart_discount}}</span>
                                </li>
                                <hr>
                            @endif

                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="small font-weight-bold">الضريبة</strong>
                                <span class="text-muted small">$ {{$cart_tax}}</span>
                            </li>
                            <hr>
                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="small font-weight-bold">المبلغ</strong>
                                <span class="text-muted small">$ {{$cart_total}}</span>
                            </li>
                            <hr>
                        @else
                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="small font-weight-bold">السلة الخاصة بك فارغة</strong>

                            </li>
                            <hr>
                        @endif

                        @if (Cart::instance('default')->count() > 0)
                            <li class="navbar d-flex justify-content-center"><a class="getstarted scrollto"
                                                                                href="{{route('site.checkout')}}"
                                                                                style="background: #242632">الذهاب
                                    لإتمام الدفع</a></li>
                        @endif

                    </ul>


                </div>
            </div>


        </div>

    </div>
</div>
