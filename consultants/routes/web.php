<?php

use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\DomainController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PackageController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'auth:web'], function () {


    Route::post('/logout-users', [LoginController::class, 'logout'])->name('site.logout.user');
    Route::get('/profile', [CustomerController::class, 'profile'])->name('site.customer.profile');
    Route::patch('/profile', [CustomerController::class, 'update_profile'])->name('site.customer.update_profile');

    Route::group(['middleware' => 'check_cart'], function () {
        Route::get('/checkout', [HomeController::class, 'checkout'])->name('site.checkout');
    });


});


Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/login-users', [LoginController::class, 'getLogin'])->name('site.login');
Route::post('/login-users', [LoginController::class, 'login'])->name('site.login.user');
Route::post('/register-users', [LoginController::class, 'register'])->name('site.register.user');

Route::post('/contact/store', [HomeController::class, 'contact_store'])->name('site.contact_store');
Route::get('/domains', [DomainController::class, 'index'])->name('site.domains');
Route::get('/package-details', [PackageController::class, 'package_details'])->name('site.package_details');
Route::get('/cart', [HomeController::class, 'cart'])->name('site.cart');

Route::post('/search-domain', [PackageController::class, 'search_domain'])->name('site.search_domain');
Route::get('/about-us', [HomeController::class, 'about'])->name('site.about');

