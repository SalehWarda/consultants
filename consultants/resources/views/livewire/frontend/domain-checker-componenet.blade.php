
    <section class="col-md-8 inner-page" x-data="{ showSearch: false, showInputExistingDomain: false, logo:false }">
        <div class=" container" >


            <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">2. {{trans('site.Additional_data')}}</h4>
                <h6 class="alert-heading">{{trans('site.Answering_this_information_is_mandatory_to_complete_your_application')}}.</h6>
                <br>
                <br>



                <div class="col-md-12 ">
                    <h6 class="alert-heading">{{trans('site.Are_you_registered_in_the_tax_register')}}</h6>
                    <div class="form-check" >
                        <input class="form-check-input" type="radio" value="yes" wire:model="tax"  name="tax"  id="taxYes">
                        <label  for="taxYes">
                            <span><h6 class="alert-heading"> {{trans('site.yes')}}</h6></span>
                        </label>

                    </div>

                    <div class="form-check ">
                        <input class="form-check-input" type="radio" value="no" wire:model="tax"  name="tax" id="taxNo" >
                        <label  class="form-check-label " for="taxNo">
                            <span><h6 class="alert-heading">{{trans('site.no')}}</h6></span>
                        </label>

                    </div>
                    @error('tax')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <hr>

                <div class="col-md-12 ">
                    <h6 class="alert-heading">{{trans('site.Do_you_have_a_logo')}} <span class="text-danger">(يرجى رفع الشعار بجودة عالية الدقة.)</span></h6>
                    <div class="form-check" x-on:click="logo = ! logo" >
                        <input class="form-check-input" type="radio" value="yes" wire:model="logo"  name="logo"  id="logoYes">
                        <label  for="logoYes" >
                            <span><h6 class="alert-heading"> {{trans('site.yes')}}</h6></span>
                        </label>
                    </div>
                    <div class="form-control" x-show="logo" x-on:click.away="logo = false">
                        <input class="form-control-file" type="file" wire:model="logoFile"  name="logo"  >
                    </div>


                    <div class="form-check ">
                        <input class="form-check-input" type="radio" value="no" wire:model="logo" name="logo" id="logoNo" >
                        <label  class="form-check-label " for="logoNo">
                            <span><h6 class="alert-heading">{{trans('site.no')}}</h6></span>
                        </label>
                    </div>

                    @error('logo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <hr>
                <div class="col-md-12 ">
                    <h6 class="alert-heading">{{trans('site.Please_choose_three_colors')}}</h6><br>
                    <div class="d-flex justify-content-between">
                        <div class="form-control"  >

                            <input class="form-control" type="color" wire:model="color_one" name="color_one"  id="color">

                            @error('color_one')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-control" style="margin-left: 5px; margin-right: 5px" >
                            <input class="form-control" type="color"  wire:model="color_tow" name="color_tow"  id="color">

                        </div>
                        <div class="form-control"  >
                            <input class="form-control" type="color" wire:model="color_three" name="color_three"  id="color">

                        </div>

                    </div>


                </div>

            </div>


            <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">2. {{trans('site.Your_domain_connection')}}</h4>
                <h6 class="alert-heading">{{trans('site.Link_the_domain_to_your_package_plan.')}}.</h6>
                <br>
                <br>
                <h6 class="alert-heading">{{trans('site.Contact')}}:</h6>


                <div class="col-md-12 ">
                    <div class="form-check" >
                        <input class="form-check-input" type="radio"  name="flexRadioDefault"  id="flexRadioDefault1">
                        <label x-on:click="showSearch = ! showSearch"  class="form-check-label"  for="flexRadioDefault1">
                            <span><h6 class="alert-heading"> {{trans('site.New_domain_name')}}</h6></span>
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio"  name="flexRadioDefault" id="flexRadioDefault2" >
                        <label x-on:click="showInputExistingDomain = ! showInputExistingDomain" class="form-check-label " for="flexRadioDefault2">
                            <span><h6 class="alert-heading">{{trans('site.Domain_name_exists')}}</h6></span>
                        </label>
                    </div>
                </div>


            </div>

            <section class="inner-page" x-show="showSearch" >
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
                            <h4 class="alert-heading">{{trans('site.This_domain_is')}} {{$aggrement['available'] = trans('site.available') ?? '' }}!</h4>
                            <hr>

                            <div class="col-md-12 ">
                                <div class="info-box d-md-flex justify-content-between">

                                    <h3>{{$aggrement['domain'] ?? '' }}</h3>
                                    <h3>{{$aggrement['period'] = 'years' ?? '' }}/{{\Illuminate\Support\Str::limit(number_format(($aggrement['price']) ,2) ,5,'')   ?? ''}} {{$aggrement['currency'] ?? ''}}</h3>
                                    <div class="pricing">
                                        <a wire:click.prevent="addToCart()" class="btn-buy" ><i class="ri-shopping-cart-line"></i> {{trans('site.Add_to_cart')}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @else
                        @if($aggrement['domain'] ?? '' )
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">{{trans('site.This_domain_is_taken')}}</h4>
                                <hr>
                                <div class="col-md-12 ">
                                    <div class="info-box d-md-flex justify-content-between">
                                        <h3>{{$aggrement['domain'] ?? '' }}</h3>


                                        <h5>{{trans('site.Sorry, this_domain_is_already_taken')}}</h5>

                                    </div>
                                </div>
                            </div>
                        @endif



                    @endif





                </div>
            </section>

            <section class="inner-page" x-show="showInputExistingDomain" >
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
                                            <input class="form-control" wire:model="existingDomain" type="text" placeholder="{{trans('site.Enter_your_domain')}}"><br>
                                            <input class="form-control" wire:model="dns" type="text" placeholder="{{trans('site.Enter_dns')}}"> <br>
                                            <button class="btn btn-primary" type="submit" wire:click.prevent="addToCartExisitngDomain()" >{{trans('site.Domain_Connection')}}</button>

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


