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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registeruser', function(){
    return view('auth.registeruser');
});

Route::get('/pilihdaftar', function(){
    return view('pilihdaftar');
});

Route::get('/team-section', function () {
    return view('team-section');
});

Route::post('/registerporter', 'RegisterporterrController@tambahporter');
