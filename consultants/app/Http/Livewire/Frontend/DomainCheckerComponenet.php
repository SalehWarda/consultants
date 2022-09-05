<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Backend\Package;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DomainCheckerComponenet extends Component
{
    use LivewireAlert;

    public $domain_name;
    public $aggrement;


    public function removeData()
    {
        $this->domain_name = '';
        $this->aggrement = '';
    }


    public function addToCart()
    {




         if ($this->domain_name == $this->aggrement['domain']){



             Cart::instance('default')->add($this->aggrement['domain'], $this->aggrement['domain'],1 ,$this->aggrement['price'])->associate(Package::class);
             $this->emit('updateCart');

             $this->alert('success', 'تم إضافة الدومين في السلة بنجاح.');
             return redirect()->route('site.package_details');

         }



        }



public function search()
{



    $url = "https://api.ote-godaddy.com/v1/domains/available?domain=$this->domain_name";

    $header = array(
        'accept: application/json',
        'Content-Type: application/json',
        'Authorization: sso-key 3mM44UcgD2YiHj_Stcy6gYSkWxQEAcUijy1xa:N7B5mjkDTWWsR8iKTk9Dxo'
    );
    $ch = curl_init();
    $timeout=60;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    $this->aggrement = json_decode($result, true);

}
    public function render()
    {



        return view('livewire.frontend.domain-checker-componenet',[

        ]);
    }
}
