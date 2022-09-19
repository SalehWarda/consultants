<?php

use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\DomainController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\PaymentWayController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...


    Route::group(['middleware' => 'auth:web'], function () {


        Route::post('/logout-users', [LoginController::class, 'logout'])->name('site.logout.user');
        Route::get('/profile', [CustomerController::class, 'profile'])->name('site.customer.profile');
        Route::patch('/profile', [CustomerController::class, 'update_profile'])->name('site.customer.update_profile');

        Route::group(['middleware' => 'check_cart'], function () {
            Route::get('/checkout', [HomeController::class, 'checkout'])->name('site.checkout');
            Route::post('/checkout/payment', [PaymentWayController::class, 'checkout_now'])->name('site.checkout.payment');
            Route::get('/checkout/{order_id}/completed', [PaymentWayController::class, 'completed'])->name('site.checkout.complete');
            Route::get('/checkout/{order_id}/cancelled', [PaymentWayController::class, 'cancelled'])->name('site.checkout.cancel');


        });
    });


    Route::get('/', [HomeController::class, 'index'])->name('site.home');
    Route::get('/login-users', [LoginController::class, 'getLogin'])->name('site.login');
    Route::post('/login-users', [LoginController::class, 'login'])->name('site.login.user');
    Route::post('/register-users', [LoginController::class, 'register'])->name('site.register.user');
    Route::get('/register', [LoginController::class, 'getRegister'])->name('site.getRegister');

    Route::post('/contact/store', [HomeController::class, 'contact_store'])->name('site.contact_store');
    Route::get('/domains', [DomainController::class, 'index'])->name('site.domains');
    Route::get('/package-details/{id}', [PackageController::class, 'package_details'])->name('site.package_details');
    Route::get('/cart', [HomeController::class, 'cart'])->name('site.cart');

    Route::post('/search-domain', [PackageController::class, 'search_domain'])->name('site.search_domain');
    Route::get('/about-us', [HomeController::class, 'about'])->name('site.about');
    Route::get('/privacy-and-policy', [HomeController::class, 'privacy'])->name('site.privacy');
    Route::get('/terms', [HomeController::class, 'terms'])->name('site.terms');


});
