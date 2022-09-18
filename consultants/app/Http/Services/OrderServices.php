<?php

namespace App\Http\Services;

use App\Models\Backend\Order;
use App\Models\Backend\OrderTransaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

class OrderServices
{



    public function createOrder($request)
    {

        foreach (Cart::content() as $item){


            $order = Order::with('packages')->create([
                'ref_id' => 'ORD-' . Str::random(15),
                'user_id' => auth()->id(),
                'subtotal' => getNumbers()->get('subtotal'),
                'discount_code' => session()->has('coupon') ? session()->get('coupon')['code'] : null,
                'discount' => getNumbers()->get('discount'),
                'tax' => getNumbers()->get('productTaxes'),


                'total' =>   $item->options->logo == 'no' ? getNumbers()->get('total') +700 : getNumbers()->get('total'),
                'currency' => 'USD',
                'order_status' => 0,
            ]);

        }





        foreach (Cart::content() as $item) {


            if($item->options->type === 'domain')
                \App\Models\Backend\OrderPackage::create([
                    'order_id' => $order->id,
                    'package_id' =>null,
                    'domain' =>$item->name,
                    'color_one' =>$item->options->color_one,
                    'color_tow' =>$item->options->color_tow,
                    'color_three' =>$item->options->color_three,
                    'logo' =>$item->options->logo,
                    'logo_file' =>$item->options->logo_file,
                    'tax' =>$item->options->tax,
                    'dns' =>$item->options->dns,


                ]);
            elseif($item->options->type !== 'domain')
                \App\Models\Backend\OrderPackage::create([
                    'order_id' => $order->id,
                    'package_id' =>$item->id,
                    'domain' =>null,
                    'color_one' =>$item->options->color_one,
                    'color_tow' =>$item->options->color_tow,
                    'color_three' =>$item->options->color_three,
                    'logo' =>$item->options->logo,
                    'logo_file' =>$item->options->logo_file ?? null,
                    'tax' =>$item->options->tax,
                    'dns' =>$item->options->dns,


                ]);











        }

        $order->transactions()->create([
            'transaction' => OrderTransaction::NEW_ORDER
        ]);

        return $order;
    }
}
