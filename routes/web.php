<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home/', function () {
    return view('header') . view('index') . view('footer');
});
Route::get('cart/', function () {
    return view('header') . view('cart') . view('footer');
});
Route::get('aboutus/', function () {
    return view('header') . view('about') . view('footer');
});
Route::get('contactus/', function () {
    return view('header') . view('contact') . view('footer');
});
