<?php

namespace App\Http\Services;

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

//        if (!$body)
//            return false;

        $response = $this->request_client->send($request, [
            'json' => $body
        ]);

        if ($response->getStatusCode() != 200){
//            return false;
        }
        $response = json_decode($response->getBody(), true);
        return view('pages.test',compact('response')) ;

    }

    public function sendPayment($data)
    {

     return   $response = $this->buildRequest( 'https://secure.clickpay.com.sa/payment/request', 'POST', $data);


    }


}
