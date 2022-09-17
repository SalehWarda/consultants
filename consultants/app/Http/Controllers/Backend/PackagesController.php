<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PackageRequest;
use App\Models\Backend\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    //
    public function index()
    {

        $packages = Package::orderBy('id','Desc')->paginate(10);
        return view('pages.backend.packages.index',compact('packages'));
    }

    public function create()
    {
        return view('pages.backend.packages.create');
    }

    public function store(Request $request)
    {

       Package::create([

           'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
           'time_period' => $request->time_period,
           'price' => $request->price,
           'features' => ['ar' => $request->features_ar, 'en' => $request->features_en],


       ]);


        toastr('تم إضافة الباقة بنجاح!','success');
        return redirect()->back();
    }

    public function edit($id)
    {

        $package = Package::findOrFail($id);
        return view('pages.backend.packages.edit',compact('package'));
    }

    public function update(Request $request)
    {

        $packege = Package::findOrFail($request->package_id);
        $packege->update([

            'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
            'time_period' => $request->time_period,
            'price' => $request->price,
            'features' => ['ar' => $request->features_ar, 'en' => $request->features_en],

        ]);

        toastr('تم تعديل الباقة بنجاح!','success');
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $packege = Package::findOrFail($request->package_id);
        $packege->delete();
        toastr('تم حذف الباقة بنجاح!','success');
        return redirect()->back();
    }
}
