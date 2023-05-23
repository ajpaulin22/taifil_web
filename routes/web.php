<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodateController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\OnepageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MasterMaintenanceController;
use App\Http\Controllers\Admin\ManagementRegistrationController;
use App\Http\Controllers\galleryController;

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

Route::get('/', [OnepageController::class, 'index'])->name('home');

Route::group(['prefix' => 'inquiry'],function(){
    Route::get('/',[InquiryController::class,'index'])->name('inquiry');
});

Route::group(['prefix' => 'biodata'],function(){
    Route::get('/',[BiodateController::class,'index'])->name('biodata');
});

Route::group(['prefix' => 'gallery'],function(){
    Route::get('/',[galleryController::class,'index'])->name('gallery');
});



Route::group(['prefix' => 'admin'],function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');

    Route::group(['prefix' => 'MasterMaintenance'],function(){
        Route::get('/',[MasterMaintenanceController::class,'index'])->name('MasterMaintenance');
    });

    Route::group(['prefix' => 'ManagementRegistration'],function(){
        Route::get('/',[ManagementRegistrationController::class,'index'])->name('ManagementRegistration');
    });
});