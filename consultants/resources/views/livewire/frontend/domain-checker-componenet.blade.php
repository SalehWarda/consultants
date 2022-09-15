
    <section class="col-md-8 inner-page" x-data="{ showSearch: false, showInputExistingDomain: false }">
        <div class=" container" >

            <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">2. إتصال الدومين الخاص بك</h4>
                <h6 class="alert-heading">ربط الدومين بخطة الباقة الخاصة بك.</h6>
                <br>
                <br>
                <h6 class="alert-heading">إتصل ب:</h6>


                <div class="col-md-12 ">
                    <div class="form-check" >
                        <input class="form-check-input" type="radio" wire:click="removeData" name="flexRadioDefault"  id="flexRadioDefault1">
                        <label x-on:click="showSearch = ! showSearch"  class="form-check-label"  for="flexRadioDefault1">
                            <span><h6 class="alert-heading"> إسم دومين جديد</h6></span>
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" wire:click="removeData" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label x-on:click="showInputExistingDomain = ! showInputExistingDomain" class="form-check-label " for="flexRadioDefault2">
                            <span><h6 class="alert-heading">إسم دومين موجود</h6></span>
                        </label>
                    </div>
                </div>


            </div>

            <section class="inner-page" x-show="showSearch" x-on:click.away="showSearch = false">
                <h4 style="margin-right: 20px">إسم دومين جديد</h4>
                <hr>
                <div class="container">
                    <footer id="footer" class="footer" >
                        <div class="footer-newsletter">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <h4>استخدم فاحص الدومين للبحث عن الدومينات المتاحة</h4>
                                        <p>فقط اكتب اسم الدومين الذي تريده واكتشف على الفور إن كان متوفرا.</p>
                                    </div>
                                    <div class="col-lg-6">


                                       <form>
                                           <input class="form-control" type="text" wire:model="domain_name" placeholder="إبحث عن إسم الدومين المطلوب">
                                           <input type="submit" wire:click.prevent="search" value="بحث">

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
                <h4 style="margin-right: 20px">إسم دومين موجود</h4>
                <hr>
                <div class="container">
                    <footer id="footer" class="footer" >
                        <div class="footer-newsletter">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <h4>  فقط اكتب اسم الدومين الخاص بك ليتم ربطه بالباقة </h4>
                                    </div>
                                    <div class="col-lg-6">

                                        <form>
                                            <input class="form-control" wire:model="existingDomain" type="text" placeholder="أدخل الدومين الخاص بك">
                                            <input type="submit" wire:click.prevent="addToCartExisitngDomain()" value="ربط الدومين">

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


