<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Backend\Contact;
use App\Models\Backend\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['contact'] = Contact::first();
        return view('pages.frontend.index',$data);
    }

    public function contact_store(ContactRequest $request)
    {

        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['subject'] = $request->subject;
        $input['message'] = $request->message;

        $mail = Mail::create($input);

//        Admin::whereStatus(true)->each(function ($admin, $key) use ($mail) {
//            $admin->notify(new MailCreateNotification($mail));
//        });

        return back()->with([

            'message' => 'تم الإرسال بنجاح !',
            'alert-type' => 'success'
        ]);
    }

}
