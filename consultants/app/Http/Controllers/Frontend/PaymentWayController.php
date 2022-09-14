<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\ClickPay;
use App\Http\Services\OrderServices;
use App\Models\Backend\Order;
use Illuminate\Http\Request;

class PaymentWayController extends Controller
{

    private $clickPay;

    public function __construct(ClickPay $clickPay)
    {
        $this->clickPay = $clickPay;
    }

    public function checkout_now(Request $request)
    {

        $order = (new OrderServices())->createOrder($request->except(['_token', 'submit']));

        $data = [


            "profile_id" => 42339,
            "tran_type" => "sale",
            "tran_class" => "ecom",
            "cart_id" => $order->ref_id,
            "cart_description" => $order->ref_id,
            "cart_currency" => $order->currency,
            "cart_amount" => $order->total,
            "callback" =>'https://www.facebook.com/',
            "return" => route('site.home'),

        ];


      return  $this->clickPay->sendPayment($data);

    }

    public function completed()
    {

    }
}
