<div wire:ignore>
    <div class="row gy-4" data-aos="fade-left">

        @foreach($packages as $package)
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <h3 style="color: #07d5c0;">{{$package->title}}</h3>
                    <div class="price"><sup>$</sup>{{$package->price}}<span> / {{$package->time_period}}</span></div>
                    <br>
                    <a wire:click.prevent="addToCart({{$package->id}})" style=" cursor: pointer" class="btn-buy"><i class="ri-shopping-cart-line"></i> إضافة إلى السلة </a>
                    <br>
                    <br>
                    <ul>
                        <li>{!! $package->features !!} </li>

                    </ul>
{{--                    <br>--}}
{{--                    <br>--}}
{{--                    <a  style=" cursor: pointer; color: #0a53be; font-size: 15px;" > <i class="ri-play-list-add-line"></i> المزيد من التفاصيل </a>--}}
                </div>
            </div>
        @endforeach




    </div>
</div>
