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


        $order = Order::create([
            'ref_id' => 'ORD-' . Str::random(15),
            'user_id' => auth()->id(),
            'subtotal' => getNumbers()->get('subtotal'),
            'discount_code' => session()->has('coupon') ? session()->get('coupon')['code'] : null,
            'discount' => getNumbers()->get('discount'),
            'tax' => getNumbers()->get('productTaxes'),
            'total' => getNumbers()->get('total'),
            'currency' => 'USD',
            'order_status' => 0,
        ]);


//
//        foreach (Cart::content() as $item) {
//
//
//            if($item->options->type === 'course')
//                \App\Models\Backend\OrderPackage::create([
//                    'order_id' => $order->id,
//                    'package_id' =>$item->model->id,
//                    'domain' =>$item->model->id,
//
//                ]);
//
//
//
//
//
//
//
//
//        }

        $order->transactions()->create([
            'transaction' => OrderTransaction::NEW_ORDER
        ]);

        return $order;
    }
}
