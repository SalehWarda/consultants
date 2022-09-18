<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\PrivacyAndPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacy = PrivacyAndPolicy::first();
        return view('pages.backend.privacyAndPolicy.index',compact('privacy'));
    }

    public function update(Request $request)
    {


        $privacy = PrivacyAndPolicy::whereId($request->privacy_id)->firstOrFail();

        $input['privacy_policy'] =  ['ar' =>$request->privacy_policy_ar , 'en' => $request->privacy_policy_en];
        $input['term'] =  ['ar' =>$request->term_ar , 'en' => $request->term_en];







        $privacy->update($input);

        toastr()->success('تم التعديل بنجاح !');

        return redirect()->back();
    }
}
