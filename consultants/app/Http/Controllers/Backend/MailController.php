<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $count = Mail::all();
        $mails = Mail::orderBy('id','DESC')->paginate(10);
        return view('pages.backend.mail.index',compact('mails','count'));
    }

    public function mail_details($id)
    {
        $mails = Mail::findOrFail($id);
        return view('pages.backend.mail.read',compact('mails'));
    }

    public function destroy(Request $request)
    {
        $mail = Mail::findOrFail($request->mail_id);
        $mail->delete();
        toastr()->success(trans('site.Deleted_successfully'));
        return redirect()->back();
    }
}
