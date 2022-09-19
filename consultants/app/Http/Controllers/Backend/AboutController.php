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
        return view('pages.backend.about.index', compact('about'));
    }


    public function update(Request $request)
    {


        $about = About::whereId($request->about_id)->firstOrFail();
        $input['title_one'] = ['ar' => $request->title_one_ar, 'en' => $request->title_one_en];
        $input['body_one'] = ['ar' => $request->body_one_ar, 'en' => $request->body_one_en];
        $input['title_tow'] = ['ar' => $request->title_tow_ar, 'en' => $request->title_tow_en];
        $input['body_tow'] = ['ar' => $request->body_tow_ar, 'en' => $request->body_tow_en];
        $input['title_three'] = ['ar' => $request->title_three_ar, 'en' => $request->title_three_en];
        $input['body_three'] = ['ar' => $request->body_three_ar, 'en' => $request->body_three_en];
        $input['title_four'] = ['ar' => $request->title_four_ar, 'en' => $request->title_four_en];
        $input['body_four'] = ['ar' => $request->body_four_ar, 'en' => $request->body_four_en];


        $about->update($input);

        toastr()->success(trans('site.Updated_successfully'));

        return redirect()->back();
    }
}
