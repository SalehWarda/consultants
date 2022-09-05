<div wire:ignore>
    <div class="row gy-4" data-aos="fade-left">

        @foreach($packages as $package)
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <h3 style="color: #07d5c0;">{{$package->title}}</h3>
                    <div class="price"><sup>$</sup>{{$package->price}}<span> / {{$package->time_period}}</span></div>
                    <img src="{{asset('assets/site/img/pricing-free.png')}}" class="img-fluid" alt="">
                    <ul>
                        <li>{!! $package->features !!}</li>

                    </ul>
                    <a wire:click.prevent="addToCart({{$package->id}})" class="btn-buy">Get Started</a>
                </div>
            </div>
        @endforeach




    </div>
</div>
