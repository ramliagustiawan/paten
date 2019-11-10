<?php


Route::get('/', 'HomeController@index')->name('dashboard');

// taruh diatas datatable
Route::get('/user/data', 'DataController@data')->name('user.data');
Route::get('/daftar/layanan', 'DataController@layanan')->name('daftar.layanan');
Route::get('/proses/surat', 'DataController@surat')->name('proses.surat');
Route::get('/tindak/lanjut', 'DataController@lanjut')->name('tindak.lanjut');

Route::resource('/user', 'UserController');

Route::resource('/daftar', 'DaftarController');
Route::post('/daftar/{daftar}', 'DaftarController@proses')->name('daftar.proses');

Route::resource('/proses', 'ProsesController');

Route::resource('/tindak', 'TindakController');
