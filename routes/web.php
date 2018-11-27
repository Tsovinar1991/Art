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



Route::get('/', 'MainController@welcome');
Route::get('/gallery', 'PictureController@index');
Route::get('/show/{id}', 'PictureController@show');
Route::any('/category/{id}', 'PictureController@category');




Route::get('/reglog', function () {   ///this is just for need
    return view('reglog');
});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');



