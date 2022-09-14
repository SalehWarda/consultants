<?php

namespace App\Http\Livewire\Frontend;

use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CartComponent extends Component
{
use LivewireAlert;
    public $cartCount;


    protected $listeners = [
        'updateCart' => 'update_cart',
        'removeFromCart' => 'remove_from_cart',

    ];

    public function mount()
    {
        $this->cartCount = Cart::instance('default')->count();
    }

    public function remove_from_cart($rowId)
    {
        Cart::instance('default')->remove($rowId);
        $this->emit('updateCart');
        $this->alert('success', 'تم إزالة الباقة من السلة!');
        if (Cart::instance('default')->count() == 0){
            return redirect()->route('site.cart');
        }
    }

    public function update_cart()
    {
        $this->cartCount = Cart::instance('default')->count();
    }

    public function render()
    {
        return view('livewire.frontend.cart-component');
    }
}
