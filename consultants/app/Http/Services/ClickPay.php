<?php

namespace App\Http\Services;

use App\Models\Backend\Coupon;
use App\Models\Backend\Order;
use App\Models\Backend\OrderTransaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Client;

class ClickPay
{

    private $base_url;
    private $headers=[];
    private $request_client;


    public function __construct(\GuzzleHttp\Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = 'https://secure.clickpay.com.sa/payment/request';
        $this->headers = [

            'content_type' => 'application/json',
            'authorization' => 'SMJNLKMZDT-JGDBTRT666-WKJKRMZWJW'

        ];
    }

    public function buildRequest($url, $method, $body=[])
    {
        $request = new \GuzzleHttp\Psr7\Request($method, $url , $this->headers);

       // if (!$body)
          //  return false;

        $response = $this->request_client->send($request, [
            'json' => $body
        ]);

        if ($response->getStatusCode() != 200){
         //return false;
        }
        $response = json_decode($response->getBody(), true);

         return $response;

    }

    public function sendPayment($data)
    {

       $response = $this->buildRequest( 'https://secure.clickpay.com.sa/payment/request', 'POST', $data);
        return view('pages.frontend.invoiceInfo.index',compact('response')) ;

    }

    public function getPaymentStatus($data)
    {
        $order = Order::whereRefId($data['cart_id'])->first();


      $response = $this->buildRequest( 'https://secure.clickpay.com.sa/payment/query', 'POST',$data);






        if ($response[0]['payment_result']['response_status'] == 'A') {
            $order->update(['order_status' => Order::PAYMENT_COMPLETED]);
            $order->transactions()->create([
                'transaction' => OrderTransaction::PAYMENT_COMPLETED,
                'transaction_number' => $response[0]['tran_ref'],
                'payment_result' => 'success'
            ]);

            if (session()->has('coupon')) {
                $coupon = Coupon::whereCode(session()->get('coupon')['code'])->first();
                $coupon->increment('used_times');
            }

            Cart::instance('default')->destroy();

            session()->forget([
                'coupon',

            ]);

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



            toastr('Your recent payment is successful with reference code: ' . $response[0]['tran_ref'], 'success');
            return redirect()->route('site.home');
        }


    }

}
