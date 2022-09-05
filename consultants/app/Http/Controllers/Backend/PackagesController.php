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

        $packages = Package::paginate(10);
        return view('pages.backend.packages.index',compact('packages'));
    }

    public function create()
    {
        return view('pages.backend.packages.create');
    }

    public function store(PackageRequest $request)
    {

        Package::create($request->validated());

        toastr('تم إضافة الباقة بنجاح!','success');
        return redirect()->back();
    }

    public function edit($id)
    {

        $package = Package::findOrFail($id);
        return view('pages.backend.packages.edit',compact('package'));
    }

    public function update(PackageRequest $request)
    {

        $packege = Package::findOrFail($request->package_id);
        $packege->update($request->validated());

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
