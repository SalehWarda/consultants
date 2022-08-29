<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::first();
        return view('pages.backend.about.index',compact('about'));
    }


    public function update(Request $request)
    {


        $about = About::whereId($request->about_id)->firstOrFail();
        $input['title_one'] =  $request->title_one;
        $input['body_one'] = $request->body_one;
        $input['title_tow'] =  $request->title_tow;
        $input['body_tow'] =  $request->body_tow;
        $input['title_three'] = $request->title_three;
        $input['body_three'] = $request->body_three;
        $input['title_four'] = $request->title_four;
        $input['body_four'] = $request->body_four;





        $about->update($input);

        toastr()->success('تم التعديل بنجاح !');

        return redirect()->back();
    }
}
