<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::pattern('id', '[0-9]+');
Route::pattern('id_lesson', '[0-9]+');
Route::pattern('slug', '.+');
Route::get('/', [
    'as'=>'index.index',
    'uses'=>'IndexController@index',
]);
Route::group(['middleware' => 'auth'],function(){
    Route::get('home', [
        'as'=>'index.home',
        'uses'=>'IndexController@home',
    ]);
    Route::get('course/{id}/{content}', [
        'as'=>'course.index',
        'uses'=>'LessonController@index',
    ]);
    Route::get('course/{id}/{slug}/{id_lesson}/{action}', [
        'as'=>'course.index',
        'uses'=>'LessonController@lesson',
    ]);
    Route::get('courses', [
        'as'=>'course.cat',
        'uses'=>'LessonController@cat',
    ]);
    Route::get('user/{slug}', [
        'as'=>'user.index',
        'uses'=>'UserController@index',
    ]);
    Route::get('setting', [
        'as'=>'user.setting',
        'uses'=>'UserController@setting',
    ]);
    Route::get('setting/change_pass', [
        'as'=>'user.change_pass',
        'uses'=>'UserController@change_pass',
    ]);
});
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
Route::get('logout',[
    'as' => 'auth.auth.logout',
    function(){
        Auth::logout();
        return Redirect::to('/');
    }
]);



