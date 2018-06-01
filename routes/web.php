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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_sr', function(){
	return view('home_sr');
});

Route::get('about', function () {
    return view('about');
})->middleware('backoffice::class');

Route::get('/home_bo', function () {
    return view('home_bo');
});

Route::get('/page1_bo', function () {
    return view('page1_bo');
});

Route::get('/page2_bo', function () {
    return view('page2_bo');
});

Route::get('/page3_bo', function () {
    return view('page3_bo');
});

Route::get('/page4_bo', function () {
    return view('page4_bo');
});

Route::get('/contact', 'ContactController@create')->name('contact.create'); 
Route::post('/contact', 'ContactController@store')->name('contact.store');