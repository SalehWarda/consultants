<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('pages.backend.auth.login');
    }



    public function login(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            return redirect()->route('admin.dashboard');
        }else{
            return back()->with([

                'message' => 'يوجد خطأ في البيانات, يرجى المحاولة مرة أخرى !',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.getLogin');
    }
}
