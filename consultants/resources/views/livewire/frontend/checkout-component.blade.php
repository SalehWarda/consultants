<div>
    <div  class="container " >


        <div class="row gy-4">


            <div  >
                <div class="service-box ">


                    <ul class="mb-20">

                        <li class="d-flex align-items-center justify-content-center">
                            <strong class="small font-weight-bold">{{trans('site.Your_order_information')}}</strong>
                        </li>
                        <hr>

                        <li class="d-flex align-items-center justify-content-between">
                            <strong class="small font-weight-bold">{{trans('site.Sub_Total')}}</strong>
                            <span class="text-muted small">$ {{$cart_subtotal}}</span>
                        </li>
                        <hr>

                        @if(session()->has('coupon'))
                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="small font-weight-bold">
                                    {{trans('site.Discount')}}<small>({{ getNumbers()->get('discount_code') }})</small></strong>
                                <span class="text-muted small">- $ {{ $cart_discount }}</span>
                            </li>
                            <hr>
                        @endif
                        <li class="d-flex align-items-center justify-content-between">
                            <strong class="small font-weight-bold"> {{trans('site.Tax')}}</strong>
                            <span class="text-muted small">$ {{$cart_tax}}</span>
                        </li>
                        <hr>
                        <li class="d-flex align-items-center justify-content-between">
                            <strong class="small font-weight-bold"> {{trans('site.Amount')}}</strong>
                            <span class="text-muted small">$ {{$cart_total}}</span>
                        </li>
                        <hr>

                        <li class="row d-flex align-items-center justify-content-center">

                            <form wire:submit.prevent="applyDiscount()">


                                <div class="col-12">
                                    @if (!session()->has('coupon'))
                                        <input type="text" wire:model="coupon_code" class="form-control "
                                               placeholder=" {{trans('site.Enter_your_coupon_if_any')}}">
                                    @endif
                                </div>

                                <br>
                                @if(session()->has('coupon'))
                                    <button type="button" wire:click.prevent="removeCoupon()"
                                            class="btn btn-danger btn-sm btn-block">
                                        <i class="fas fa-gift mr-2"></i>  {{trans('site.Coupon_removal')}}
                                    </button>
                                @else

                                    <div class="d-flex justify-content-start">
                                        <button type="submit" class="btn btn-dark btn-sm btn-block">
                                            <i class="ri-gift-fill mr-2"></i> {{trans('site.Confirm_the_coupon')}}
                                        </button>
                                    </div>

                                @endif

                            </form>

                        </li>


                    </ul>


                </div>
            </div>


        </div>

    </div>
</div>
