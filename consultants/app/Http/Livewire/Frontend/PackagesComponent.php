<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Backend\Package;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class PackagesComponent extends Component
{
    use LivewireAlert;

    public function addToCart($id)
    {
        $package = Package::whereId($id)->firstOrFail();
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($package) {
            return $cartItem->id === $package->id;
        });
        if ($duplicates->isNotEmpty()) {
            $this->alert('error', 'الباقة موجودة بالفعل !');
        } else {
            Cart::instance('default')->add($package->id, $package->title,1 ,$package->price)->associate(Package::class);
            $this->emit('updateCart');

            $this->alert('success', 'تم إضافة الباقة في السلة بنجاح.');
            return redirect()->route('site.package_details',$package->id);

        }
    }


    public function render()
    {
        return view('livewire.frontend.packages-component',[

                'packages' => Package::orderBy('id','DESC')->get()

        ]);
    }
}
