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




Route::get('/', function () { return view('home'); });

Route::resource('logistik','LogistikController');
Route::resource('laporan','LaporanController');
Route::resource('kategori','KategoriController');
// Route::post('laporan.store2', 'LaporanController@store2');
Auth::routes();

Route::post('/laporkan/proses', 'LaporanController@store2');
Route::get('laporkan', 'MasterController@laporan');

Route::get('/home', 'HomeController@index')->name('home');