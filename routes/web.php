<?php

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



Route::get('/home', function () {
    return view('onePage');
});

Route::get('/qualifications',function(){
    return view('pages.qualification');
});


Route::group(['prefix' => 'category'],function(){
    Route::get('/',function(){
        return view('pages.jobcategory');
    })->name('category');
});

Route::get('/home', [App\Http\Controllers\OnepageController::class, 'index'])->name('home');

Route::group(['prefix' => 'inquiry'],function(){
    Route::get('/',[App\Http\Controllers\InquiryController::class,'index'])->name('inquiry');
});

Route::group(['prefix' => 'biodata'],function(){
    Route::get('/',[App\Http\Controllers\BiodateController::class,'index'])->name('biodata');
});


Route::group(['prefix' => 'admin'],function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');

    Route::group(['prefix' => 'MasterMaintenance'],function(){
        Route::get('/',[App\Http\Controllers\Admin\MasterMaintenanceController::class,'index'])->name('MasterMaintenance');
    });

    Route::group(['prefix' => 'ManagementRegistration'],function(){
        Route::get('/',[App\Http\Controllers\Admin\ManagementRegistrationController::class,'index'])->name('ManagementRegistration');
    });
});