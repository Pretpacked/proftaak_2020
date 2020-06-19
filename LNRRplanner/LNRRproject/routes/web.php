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

Route::get('covid', function () {
    return view('pages/covid');
});

Route::get('rooster', function () {
    return view('pages/rooster');
});

Route::get('studie', function () {
    return view('pages/studie');
});

Route::get('plannen', function () {
    return view('pages/plannen');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
