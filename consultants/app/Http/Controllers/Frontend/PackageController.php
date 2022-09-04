<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function package_details()
    {


        return view('pages.frontend.packages.package_details');
    }

}
