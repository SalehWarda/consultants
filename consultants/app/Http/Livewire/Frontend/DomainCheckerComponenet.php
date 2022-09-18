<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Backend\Package;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class DomainCheckerComponenet extends Component
{
    use LivewireAlert,WithFileUploads;

    public $domain_name;
    public $aggrement;
    public $existingDomain;


    public $color_one;
    public $color_tow;
    public $color_three;
    public $logo;
    public $logoFile;
    public $tax;
    public $dns;


    public function removeData()
    {
        $this->domain_name = '';
        $this->aggrement = '';
    }


    public function rules()
    {
        return [
            'color_one' => ['required'],

            'logo' => ['required'],
            'tax' => ['required'],

        ];
    }

    protected $messages = [
        'color_one.required' => 'هذا الحقل لا يجب أن يكون فارغ',

        'logo.required' => 'هذا الحقل لا يجب أن يكون فارغ',
        'tax.required' => 'هذا الحقل لا يجب أن يكون فارغ',


    ];

    public function addToCart()
    {

       $this->validate();

         if ($this->domain_name == $this->aggrement['domain']){


             if($logof = $this->logoFile){



                 $file_name = Str::slug($logof).'_'.time().'_'.'.'.$logof->getClientOriginalExtension();
                 $file_size= $logof->getSize();
                 $file_type = $logof->getMimeType();
                 $path = public_path('/assets/images/packages/'.$file_name);
                 Image::make($logof->getRealPath())->resize(500,null,function ($constraint){
                     $constraint->aspectRatio();
                 })->save($path,100);


             }

             Cart::instance('default')->add($this->aggrement['domain'],
                 $this->aggrement['domain'],
                 1 ,
                 Str::limit($this->aggrement['price'],2,'') ,
                 ['type'=>'domain',
                 'color_one'=>$this->color_one,
                 'color_tow'=>$this->color_tow,
                 'color_three'=>$this->color_three,
                 'logo' => $this->logo,
                 'logo_file' => $file_name ?? '',
                 'tax' => $this->tax,
                 'dns' => $this->dns,
                     ] )->associate(Package::class);
             $this->emit('updateCart');






             $this->alert('success', 'تم إضافة الدومين في السلة بنجاح.');
             return redirect()->route('site.cart');

         }







    }


   public function addToCartExisitngDomain()
    {




        $this->validate();


         if ($this->existingDomain)
         {

             if($logof = $this->logoFile){



                 $file_name = Str::slug($logof).'_'.time().'_'.'.'.$logof->getClientOriginalExtension();
                 $file_size= $logof->getSize();
                 $file_type = $logof->getMimeType();
                 $path = public_path('/assets/images/packages/'.$file_name);
                 Image::make($logof->getRealPath())->resize(500,null,function ($constraint){
                     $constraint->aspectRatio();
                 })->save($path,100);


             }

             Cart::instance('default')->add($this->existingDomain,
                 $this->existingDomain,1 ,0,
                 ['type'=>'domain',
                     'color_one'=>$this->color_one,
                     'color_tow'=>$this->color_tow,
                     'color_three'=>$this->color_three,
                     'logo' => $this->logo,
                     'logo_file' => $file_name ?? null,
                     'tax' => $this->tax,
                     'dns' => $this->dns,
                 ] )->associate(Package::class);



             $this->emit('updateCart');

             $this->alert('success', 'تم إضافة الدومين في السلة بنجاح.');
             return redirect()->route('site.cart');
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
