<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MailController;
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

    });



    Route::get('/login', [LoginController::class, 'getLogin'])->name('admin.getLogin');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

});
