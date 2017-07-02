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


//test route
Route::get('/product/1', function () {
    return view('pages.product-detail');
});

Route::get('/producten', function () {
    return view('pages.products');
});

Route::get('/installatie', function () {
    return view('pages.installatie');
});
Route::get('/contact', function () {
    return view('pages.contact');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
