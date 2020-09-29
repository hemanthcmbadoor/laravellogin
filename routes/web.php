<?php

use App\Models\Member;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberContoller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberForm1Controller;
use App\Http\Controllers\MemberForm2Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;


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

Route::group(['middleware'=>'web'], function() {
    Route::resource('/',MemberContoller::class);
});

Route::group(['middleware'=>'web'], function() {
    Route::resource('/register',RegisterController::class);
    
});

Route::group(['middleware'=>'checkStatus'], function() {
    Route::resource('/form1',MemberForm1Controller::class);
    
});

Route::group(['middleware'=>'checkStatus'], function() {
    Route::resource('/form2',MemberForm2Controller::class);
    
});

Route::group(['middleware'=>'checkStatus'], function() {
    Route::resource('/profile',ProfileController::class);
    
});

//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout',[LogoutController::class, 'logout']);



