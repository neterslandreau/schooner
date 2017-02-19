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
    return view('diner');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::post('items/addtocart', 'ItemsController@addToCart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('items/{slug}/edit', 'ItemsController@edit');
Route::get('items/create', 'ItemsController@create');
Route::post('/items/{slug}/edit', 'ItemsController@edit');
Route::post('items', 'ItemsController@store');
Route::get('items/{slug}/delete', 'ItemsController@destroy');

Route::get('types/{slug}/edit', 'TypesController@edit');
Route::get('types/create', 'TypesController@create');
Route::post('/types/{slug}/edit', 'TypesController@edit');
Route::post('types', 'TypesController@store');
Route::get('types/{slug}/delete', 'TypesController@destroy');
