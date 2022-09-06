<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Backend\About;
use App\Models\Backend\Admin;
use App\Models\Backend\Contact;
use App\Models\Backend\Mail;
use App\Models\Backend\Package;
use App\Notifications\Frontend\Mail\MailCreateNotification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['packages'] = Package::get();
        return view('pages.frontend.index',$data);
    }

    public function contact_store(ContactRequest $request)
    {

        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['subject'] = $request->subject;
        $input['message'] = $request->message;

        $mail = Mail::create($input);

        Admin::query()->each(function ($admin, $key) use ($mail) {
            $admin->notify(new MailCreateNotification($mail));
        });

        return back()->with([

            'message' => 'تم الإرسال بنجاح !',
            'alert-type' => 'success'
        ]);
    }

    public function cart()
    {

        return view('pages.frontend.cart.index');
    }

    public function checkout()
    {

        return view('pages.frontend.checkout.index');
    }

    public function about()
    {
        $about = About::first();
        return view('pages.frontend.about.about_details',compact('about'));
    }
}
