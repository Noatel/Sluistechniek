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

Route::get('/', 'PageController@index');

Route::get('/producten', 'ProductController@index');
Route::post('/producten/search', 'ProductController@search');
Route::get('/product/{product}', 'ProductController@view');


Route::get('/installatie', 'PageController@install');
Route::get('/contact', 'PageController@contact');
Route::post('/email', 'PageController@email');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
