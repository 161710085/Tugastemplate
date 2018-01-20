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
Route::get('/galeri', function () {
    return view('layout.galeri');
});
Route::get('/paragrap', function () {
    return view('layout.paragrap');
});
Route::get('/catering', function () {
    return view('layout.catering');
});
Route::get('/biodata', function () {
    return view('layout.biodata');
});
Route::get('/rumah', function () {
    return view('layout.home');
});
Route::get('/tabel', 'aditController@asiswa');

