<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MailController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\PackagesController;
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

Route::group(['prefix' => 'admin'],function (){

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');


        ############################### Mail Route ###############################

        Route::group(['prefix' => 'mail'], function () {

            Route::get('/', [MailController::class, 'index'])->name('admin.mail');
            Route::delete('/delete', [MailController::class, 'destroy'])->name('admin.mail.destroy');
            Route::get('/mail-details/{id}', [MailController::class, 'mail_details'])->name('admin.mail.mail_details');
        });

        ############################### About Route ###############################
        Route::get('/about',[AboutController::class, 'index'])->name('admin.about');
        Route::patch('/update', [AboutController::class, 'update'])->name('admin.about.update');

        ############################### Contact Route ###############################
        Route::get('/contact',[ContactController::class, 'index'])->name('admin.contact');
        Route::patch('/update/contact', [ContactController::class, 'update'])->name('admin.contact.update');

        ############################### Coupons Route ###############################

        Route::group(['prefix' => 'coupons'], function () {

            Route::get('/', [CouponController::class, 'index'])->name('admin.coupons');
            Route::post('/store', [CouponController::class, 'store'])->name('admin.coupons.store');
            Route::put('/update', [CouponController::class, 'update'])->name('admin.coupons.update');
            Route::delete('/delete', [CouponController::class, 'destroy'])->name('admin.coupons.destroy');
        });

        ############################### Packages Route ###############################

        Route::group(['prefix' => 'packages'], function () {

            Route::get('/', [PackagesController::class, 'index'])->name('admin.packages');
            Route::get('/create', [PackagesController::class, 'create'])->name('admin.packages.create');
            Route::post('/store', [PackagesController::class, 'store'])->name('admin.packages.store');
            Route::get('/edit/{id}', [PackagesController::class, 'edit'])->name('admin.packages.edit');
            Route::put('/update', [PackagesController::class, 'update'])->name('admin.packages.update');
            Route::delete('/delete', [PackagesController::class, 'destroy'])->name('admin.packages.destroy');
        });

        ############################### Orders Route ###############################

        Route::group(['prefix' => 'orders'], function () {


            Route::get('/', [OrdersController::class, 'index'])->name('admin.orders.index');
            Route::get('/create', [OrdersController::class, 'create'])->name('admin.orders.create');
            Route::post('/store', [OrdersController::class, 'store'])->name('admin.orders.store');
            Route::get('/edit/{id}', [OrdersController::class, 'edit'])->name('admin.orders.edit');
            Route::patch('/update', [OrdersController::class, 'update'])->name('admin.orders.update');
            Route::get('/show/{id}', [OrdersController::class, 'show'])->name('admin.orders.show');
            Route::delete('/delete', [OrdersController::class, 'destroy'])->name('admin.orders.destroy');
            Route::get('/package-order-details/{id}', [OrdersController::class, 'packageOrderDetails'])->name('admin.orders.package-order-details');
        });


    });



    Route::get('/login', [LoginController::class, 'getLogin'])->name('admin.getLogin');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

});
    });
