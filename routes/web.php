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

Route::get('/login/porter', 'Auth\LoginController@showPorterLoginForm');
Route::get('/login/pengguna', 'Auth\LoginController@showPenggunaLoginForm');
Route::get('/register/porter', 'Auth\RegisterController@showPorterRegisterForm');
Route::get('/register/pengguna', 'Auth\RegisterController@showPenggunaRegisterForm');

Route::post('/login/porter', 'Auth\LoginController@porterLogin');
Route::post('/login/pengguna', 'Auth\LoginController@penggunaLogin');
Route::post('/register/porter', 'Auth\RegisterController@createPorter');
Route::post('/register/pengguna', 'Auth\RegisterController@createPengguna');

Route::view('/home', 'home')->middleware('auth');
Route::view('/porter', 'porter');
Route::view('/pengguna', 'pengguna');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registeruser', function(){
    return view('auth.registeruser');
});

Route::get('/pilihdaftar', function(){
    return view('pilihdaftar');
});

Route::get('/pilihdaftarlogin', function(){
    return view('pilihdaftarlogin');
});

Route::get('/team-section', function () {
    return view('team-section');
});

Route::get('/contact', 'ContactController@showContactForm');
Route::post('/contact', 'ContactController@sendMail');

Route::post('/registerporter', 'RegisterporterrController@tambahporter');

Route::get('/hubungi', function () {
    return view('hubungi');
});

Route::get('/rating', function () {
    return view('rating');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');

