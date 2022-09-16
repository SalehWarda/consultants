
    <section class="col-md-8 inner-page" x-data="{ showSearch: false, showInputExistingDomain: false }">
        <div class=" container" >

            <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">2. {{trans('site.Your_domain_connection')}}</h4>
                <h6 class="alert-heading">{{trans('site.Link_the_domain_to_your_package_plan.')}}.</h6>
                <br>
                <br>
                <h6 class="alert-heading">{{trans('site.Contact')}}:</h6>


                <div class="col-md-12 ">
                    <div class="form-check" >
                        <input class="form-check-input" type="radio" wire:click="removeData" name="flexRadioDefault"  id="flexRadioDefault1">
                        <label x-on:click="showSearch = ! showSearch"  class="form-check-label"  for="flexRadioDefault1">
                            <span><h6 class="alert-heading"> {{trans('site.New_domain_name')}}</h6></span>
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" wire:click="removeData" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label x-on:click="showInputExistingDomain = ! showInputExistingDomain" class="form-check-label " for="flexRadioDefault2">
                            <span><h6 class="alert-heading">{{trans('site.Domain_name_exists')}}</h6></span>
                        </label>
                    </div>
                </div>


            </div>

            <section class="inner-page" x-show="showSearch" x-on:click.away="showSearch = false">
                <h4 style="margin-right: 20px">{{trans('site.New_domain_name')}}</h4>
                <hr>
                <div class="container">
                    <footer id="footer" class="footer" >
                        <div class="footer-newsletter">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <h4>{{trans('site.Use_the_domain_checker_to_search_for_available_domains')}}</h4>
                                        <p>{{trans('site.Just_type_the_domain_name_you_want_and_find_out_immediately_if_it_is_available.')}}</p>
                                    </div>
                                    <div class="col-lg-6">


                                       <form>
                                           <input class="form-control" type="text" wire:model="domain_name" placeholder="{{trans('site.Search_for_the_desired_domain_name')}}">
                                           <input type="submit" wire:click.prevent="search" value="{{trans('site.Search')}}">

                                       </form>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </footer>
                    <br>
                    <br>

                    @if($aggrement['available'] ?? '' == true )
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">هذا المجال {{$aggrement['available'] = 'متاح' ?? '' }}!</h4>
                            <hr>

                            <div class="col-md-12 ">
                                <div class="info-box d-md-flex justify-content-between">

                                    <h3>{{$aggrement['domain'] ?? '' }}</h3>
                                    <h3>{{$aggrement['period'] = 'years' ?? '' }}/{{\Illuminate\Support\Str::limit(number_format(($aggrement['price']) ,2) ,5,'')   ?? ''}} {{$aggrement['currency'] ?? ''}}</h3>
                                    <div class="pricing">
                                        <a wire:click.prevent="addToCart()" class="btn-buy" ><i class="ri-shopping-cart-line"></i> إضافة إلى السلة </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @else
                        @if($aggrement['domain'] ?? '' )
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">هذا المجال مأخوذ!</h4>
                                <hr>
                                <div class="col-md-12 ">
                                    <div class="info-box d-md-flex justify-content-between">
                                        <h3>{{$aggrement['domain'] ?? '' }}</h3>


                                        <h5>عذرا, هذا المجال مأخوذ بالفعل</h5>

                                    </div>
                                </div>
                            </div>
                        @endif



                    @endif





                </div>
            </section>

            <section class="inner-page" x-show="showInputExistingDomain" x-on:click.away="showInputExistingDomain = false">
                <h4 style="margin-right: 20px">{{trans('site.Domain_name_exists')}}</h4>
                <hr>
                <div class="container">
                    <footer id="footer" class="footer" >
                        <div class="footer-newsletter">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <h4>  {{trans('site.Just_type_your_domain_name_to_be_linked_to_the_package')}}</h4>
                                    </div>
                                    <div class="col-lg-6">

                                        <form>
                                            <input class="form-control" wire:model="existingDomain" type="text" placeholder="{{trans('site.Enter_your_domain')}}">
                                            <input type="submit" wire:click.prevent="addToCartExisitngDomain()" value="{{trans('site.Domain_Connection')}}">

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </footer>


                </div>
            </section>

        </div>
    </section>


