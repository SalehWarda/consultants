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

    public function getRegister()
    {
        return view('pages.frontend.auth.register');
    }

    public function login(LoginRequest $request)
    {
        if (auth('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){



            return redirect()->route('site.home');
        }else{
            return back()->with([

                'message' => trans('site.There_is_an_error_in_the_data,_please_try_again'),
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


    public function logout(Request $request)
    {
        $cart = collect($request->session()->get('cart'));

        /* Call original logout method */
        $response = $this->originalLogout($request);

        /* Repopulate Sesssion with Cart */
        if (!config('cart.destroy_on_logout')) {
            $cart->each(function ($rows, $identifier) use ($request){
                $request->session()->put('cart.'. $identifier, $rows);
            });
        }

        /* Return original response */
        return $response;

    }

    public function originalLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('site.home');
    }

}
