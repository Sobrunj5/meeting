<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();

Route::group(['prefix' =>'user'],function (){
    Route::post('register', 'V1\user\Auth\RegisterController@register');
    Route::post('login','V1\user\Auth\LoginController@login');
    Route::get('profile', 'V1\user\UserController@profile');
    Route::post('profile/profile', 'V1\user\UserController@updateProfile');
});

Route::get('ruangmeeting','V1\user\RuanganController@getRuangMeeting');
Route::post('ruangmeeting/search', 'V1\user\RuanganController@search');

Route::get('makanan/{id_mitra}', 'V1\user\MakananController@makanan');

Route::post('order','V1\user\BookingController@booking');

Route::post('snap', 'V1\user\BookingController@snapToken');
Route::post('snap/charge', 'V1\user\BookingController@snapToken');
