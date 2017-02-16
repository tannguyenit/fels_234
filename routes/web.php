<?php

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

Route::get('auth/{provider}',[
    'as' => 'auth.provider.login',
    'uses' => 'Auth\RegisterController@redirectToProvider',
]);
Route::get('auth/{provider}/callback',[
    'as' => 'auth.provider.login',
    'uses' => 'Auth\RegisterController@handleProviderCallback',
]);
Route::post('login',[
    'as' => 'auth.auth.login',
    'uses' => 'Auth\LoginController@postLogin',
]);
