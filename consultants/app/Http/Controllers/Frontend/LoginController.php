<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\LoginRequest;
use App\Http\Requests\Frontend\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('pages.frontend.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){



            return redirect()->route('site.home');
        }else{
            return back()->with([

                'message' => 'يوجد خطأ في البيانات, يرجى المحاولة مرة أخرى !',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function register(RegisterRequest $request)
    {

        $customer = User::create([
            'name' => $request->name,
            'email' => $request->email_reg,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'job' => $request->job,
            'password' => Hash::make($request->password_reg),
        ]);

        return redirect()->route('site.home');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('site.home');
    }

}
