<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function profile()
    {

        return view('pages.frontend.customer.profile');
    }

    public function update_profile(ProfileRequest $request)
    {
        $user = auth()->user();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['job'] = $request->job;
        $data['age'] = $request->age;

        if (!empty($request->password) && !Hash::check($request->password, $user->password)) {
            $data['password'] = bcrypt($request->password);
        }



        $user->update($data);

        toastr(trans('site.Updatedsuccessfully'), 'success');
        return back();
    }
}
