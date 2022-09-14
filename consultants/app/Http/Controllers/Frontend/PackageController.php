<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function package_details($id)
    {

          $package = Package::findOrFail($id);
        return view('pages.frontend.packages.package_details',compact('package'));
    }

}
