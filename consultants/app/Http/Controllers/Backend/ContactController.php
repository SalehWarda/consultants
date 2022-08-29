<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('pages.backend.contact.index',compact('contact'));
    }


    public function update(Request $request)
    {


        $contact = Contact::whereId($request->contact_id)->firstOrFail();
        $input['email'] =  $request->email;
        $input['mobile'] = $request->mobile;






        $contact->update($input);

        toastr()->success('تم التعديل بنجاح !');

        return redirect()->back();
    }
}
