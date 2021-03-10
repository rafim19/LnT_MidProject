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

Route::get('/', 'HomeController@beranda')->name('book.beranda');
Route::get('/add', 'HomeController@tambah')->name('book.add');
Route::post('/stored', 'HomeController@penyimpanan')->name('book.tambah');
Route::get('/edit/{id}', 'HomeController@ubah')->name('book.ubah');
Route::patch('/terubah/{id}', 'HomeController@terubah')->name('book.terubah');
Route::delete('/hapus/{id}', 'HomeController@hapus')->name('book.hapus');
Route::get('/tampil/{id}', 'HomeController@tampil')->name('book.tampil');