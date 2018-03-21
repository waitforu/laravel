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

Route::get('/', function () {
    return view('welcome');
});

Route::get("ftd",function (){
    return view('ftd');
});

Route::redirect('/home','/',301);

Route::namespace('Auth')->group(function (){
    Route::get('login',function (){
        return view('login/index');
    })->name('login');

    Route::get('register',function (){
    })->name('register');
});
Route::resources([
    'tests' => 'TestController'
]);