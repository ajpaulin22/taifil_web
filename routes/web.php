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

Route::get('/home', [App\Http\Controllers\OnepageController::class, 'index'])->name('home');

Route::group(['prefix' => 'inquiry'],function(){
    Route::get('/',[App\Http\Controllers\InquiryController::class,'index'])->name('inquiry');
});

Route::group(['prefix' => 'biodata'],function(){
    Route::get('/',[App\Http\Controllers\BiodateController::class,'index'])->name('biodata');
});