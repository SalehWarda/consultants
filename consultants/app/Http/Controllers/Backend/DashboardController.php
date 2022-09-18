<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('pages.backend.index');
    }

    public function profile()
    {
        return view('pages.backend.profile');
    }

    public function profileUpdate(ProfileAdminRequest $request)
    {

        $user = auth('admin')->user();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;


        if (!empty($request->password) && !Hash::check($request->password, $user->password)) {
            $data['password'] = bcrypt($request->password);
        }



        $user->update($data);

        toastr('تم تحديث بياناتك بنجاح!', 'success');
        return back();



}}
