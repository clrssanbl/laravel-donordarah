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

use App\Http\Controllers\UserController;
use App\Providers\RouteServiceProvider;


//profile
Route::get('/profile/{user}', 'UserController@show')->middleware('auth')->name('profile');

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/search', 'AppController@search');

//Lokasi
Route::get('/lokasi', 'LokasisController@index');
Route::get('/lokasi/createlokasi','LokasisController@create');
Route::get('/lokasi/listlokasi', 'LokasisController@show')->middleware('auth');
Route::get('/lokasi/{lokasi}','LokasisController@showlks');
Route::post('/lokasi','LokasisController@store')->middleware('auth');
Route::get('/editlokasi/{lokasi}','LokasisController@edit');
Route::put('/lokasi/{lokasi}', 'LokasisController@update');
Route::delete('/lokasi/{lokasi}','LokasisController@destroy');


Route::get('/services', function () {
    return view('services');
})->middleware('auth');

//listuser
Route::get('/user/creatuser','UserController@create')->name('createuser');
Route::post('/user','UserController@store')->name('storeuser');
Route::get('/user/listuser','UserController@index');
Route::patch('/user/{user}','UserController@update')->name('updateuser');
Route::delete('/user/{user}','UserController@destroy')->name('deleteuser');
Route::get('/rsdashboard/{rs}', 'UserController@rs')->name('rs');

//Donor
Route::get('/donor', 'DonorController@create')->middleware('auth')->name('formdonor');
Route::post('/donor','DonorController@store');
Route::get('/donor/listdonor','DonorController@index');
Route::patch('/donor/{donor}','DonorController@update')->name('updatedonor');
Route::put('/donor/{donor}','DonorController@selesai')->name('selesaidonor');
Route::delete('/donor/{donor}','DonorController@destroy')->name('deletedonor');

//berita
Route::get('/berita', 'BeritasController@index');
Route::get('/berita/createberita','BeritasController@create');
Route::get('/berita/listberita', 'BeritasController@show')->middleware('auth');
Route::get('/berita/{berita}','BeritasController@showbrt');
Route::post('/berita','BeritasController@store')->middleware('auth');
Route::get('/edit/{berita}','BeritasController@edit');
Route::put('/berita/{berita}', 'BeritasController@update');
Route::delete('/berita/{berita}','BeritasController@destroy');

//stock
Route::get('/stock', 'StockController@index');

//request
Route::post('/rsdashboard', 'RequestDarahController@store')->name('request');
Route::get('/managereq', 'RequestDarahController@index');
Route::patch('/managereq/{request}', 'RequestDarahController@update')->name('updaterequest');
Route::delete('/managereq/{request}', 'RequestDarahController@destroy')->name('deleterequest');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

