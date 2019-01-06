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


Route::get('/test', 'TestController@index');
Route::get('/ajax', 'TestController@ajax');
Route::post('/ajaxpost', 'TestController@ajaxpost');



Route::get('/{local?}', 'MainController@welcome');
Route::get('/gallery', 'PictureController@index');
Route::get('/show/{id}', 'PictureController@show');
Route::any('/category/{id}', 'PictureController@category');
Auth::routes();
Route::get('/admin', 'HomeController@index');






