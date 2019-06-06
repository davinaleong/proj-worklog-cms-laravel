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

Route::get('/pages/{pageName}', function($pageName) {
    return view("pages.$pageName");
});

Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('/jot')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/tags');
});
