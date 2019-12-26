<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'Auth',
], function(){
    Route::post('/auth/login', 'LoginController@login')->name('login');
    Route::post('/auth/register','RegisterController@create')->name('create');
    Route::post('/auth/forgot-password','ForgotPasswordController@sendResetLinkEmail')->name('sendResetLinkEmail');
    Route::post('/auth/password/reset/{token}','ResetPasswordController@postReset')->name('postReset');
});

///Route::post('api/auth/login', 'Auth\LoginController@login')->name('login');