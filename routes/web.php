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
    Route::get('/home', 'Jot\HomeController@index')->name('home');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/tag', 'Jot\TagController@index')->name('tag.index');
    Route::get('/tag/edit', 'Jot\TagController@edit')->name('tag.edit');
    Route::put('/tag/update', 'Jot\TagController@update')->name('tag.update');
//    Route::put('/tag/update/years', 'TagController@update')->name('update.years');
//    Route::put('/tag/update/companies', 'TagController@update')->name('update.companies');
//    Route::put('/tag/update/projects', 'TagController@update')->name('update.projects');
//    Route::put('/tag/update/daytypes', 'TagController@update')->name('update.daytypes');
});
