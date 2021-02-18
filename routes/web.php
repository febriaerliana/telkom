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
// HOME
Route::get('index', 'Frontpage\IndexController@index')->name('frontpage.index');

// BRANKAS
Route::get('brankas', 'Frontpage\BrankasController@index')->name('frontpage.brankas');
Route::get('brankas/show/{id}', 'Frontpage\BrankasController@show')->name('frontpage.brankas.show');
Route::get('brankas/create', 'Frontpage\BrankasController@create')->name('frontpage.brankas.create');
Route::post('brankas','Frontpage\BrankasController@store')->name('frontpage.brankas.store');
Route::get('brankas/edit/{id}', 'Frontpage\BrankasController@edit')->name('frontpage.brankas.edit');
Route::put('brankas/update/{id}','Frontpage\BrankasController@update')->name('frontpage.brankas.update');
Route::get('brankas/hapus/{id}','Frontpage\BrankasController@hapus')->name('frontpage.brankas.hapus');