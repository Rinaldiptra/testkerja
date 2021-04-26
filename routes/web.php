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
Route::get('/navbar', function () {
    return view('navbar');
});

Route::resource('/merek', 'merekController');
Route::resource('/distributor', 'distributorController');
Route::resource('/barang', 'barangController');
Route::resource('transaksi', 'transaksiController');
Route::get('/transaksi/{transaksi}','transaksiController@destroy');
Route::resource('/laporantransaksi', 'laporantransController');
Route::resource('/laporanbarang', 'laporanbarController');
Route::get('/report/export_excel_trans', 'laporantransController@export_excel');
Route::get('/report/export_excel', 'barangController@export_excel');
Route::get('/merek/{id}/delete','merekController@destroy');
Route::put('/bayar/{id}','transaksiController@bayar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
