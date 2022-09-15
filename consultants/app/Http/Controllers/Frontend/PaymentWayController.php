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
            "cart_description" =>'package',
            "cart_currency" => $order->currency,
            "cart_amount" => $order->total,
            "callback" => route('site.home'),
            "return" => route('site.home'),
            "customer_details" => [
                "name" => $order->user->name,
                "email" => $order->user->email,
                "phone" => $order->user->mobile,

            ] ,
            "hide_shipping"=> true


        ];


        return $this->clickPay->sendPayment($data);

    }

    public function completed()
    {

//        $order = Order::with('packages', 'user')->find($order_id);
//
//
//        $data = [
//
//
//            "profile_id" => 42339,
//            "tran_type" => "sale",
//            "tran_class" => "ecom",
//            "cart_id" => $order->ref_id,
//            "cart_description" =>'package',
//            "cart_currency" => $order->currency,
//            "cart_amount" => $order->total,
//            "callback" => route('site.home'),
//            "return" => route('site.home'),
//            "customer_details" => [
//                "name" => $order->user->name,
//                "email" => $order->user->email,
//                "phone" => $order->user->mobile,
//
//            ] ,
//            "hide_shipping"=> true
//
//
//        ];

//        if ($response->isSuccessful()) {
//            $order->update(['order_status' => Order::PAYMENT_COMPLETED]);
//            $order->transactions()->create([
//                'transaction' => OrderTransaction::PAYMENT_COMPLETED,
//                'transaction_number' => $response->getTransactionReference(),
//                'payment_result' => 'success'
//            ]);
//
//            if (session()->has('coupon')) {
//                $coupon = Coupon::whereCode(session()->get('coupon')['code'])->first();
//                $coupon->increment('used_times');
//            }
//
//            Cart::instance('default')->destroy();
//
//            session()->forget([
//                'coupon',
//                'saved_payment_method_id',
//            ]);
//
//            Admin::whereStatus(true)->each(function ($admin, $key) use ($order) {
//                $admin->notify(new OrderCreatedNotification($order));
//            });

//
//
//            $data = $order->toArray();
//            $data['currency_symbol'] = $order->currency == 'USD' ? '$' : $order->currency;
//            $pdf = PDF::loadView('layouts.invoice', $data);
//            $saved_file = storage_path('app/pdf/files/' . $data['ref_id'] . '.pdf');
//            $pdf->save($saved_file);
//
//            $customer = User::find($order->user_id);
//            $customer->notify(new OrderThanksNotification($order, $saved_file));


//            toastr('Your recent payment is successful with reference code: ' . $response->getTransactionReference(), 'success');
//            return redirect()->route('site.index');
//        }
    }
}
