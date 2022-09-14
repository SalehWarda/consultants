

@if($cartItem->name)
<div class="col-md-12 " x-data="{ show: true }" x-show="show">
    <div class="info-box d-md-flex justify-content-between">
        <h3> <i class="ri-global-fill" style="font-size: 1.2rem"></i></h3>
        <h3>{{$cartItem->name}}</h3>
        <h3>{{\Illuminate\Support\Str::limit(number_format(($cartItem->price) ,2) ,5,'')}} $</h3>

        <a href="#" class="btn-buy" style="color:#636464 " wire:click.prevent="removeFromCart('{{ $cartItem->rowId }}')" x-on:click="show = false"><i class="ri-delete-bin-2-line" style="font-size: 1.7rem"></i> </a>

    </div>
</div>
<hr>
@endif
