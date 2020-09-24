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

Route::get('/', function () {
    return view('login');
});

Route::get('/register','AuthController@getRegister')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest')->name('register');
Route::get('/login','AuthController@getLogin')->middleware('guest');
Route::post('/login','AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/home','HomeController@index')->name('home');
Route::get('/paket','PaketController@index')->middleware('auth');
Route::get('/paket/tambah_view','PaketController@tambah_view')->middleware('auth');
