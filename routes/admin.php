<?php


Route::get('/', 'HomeController@index')->name('dashboard');

// taruh diatas datatable
Route::get('/user/data', 'DataController@data')->name('user.data');
Route::get('/daftar/layanan', 'DataController@layanan')->name('daftar.layanan');
Route::get('/proses/surat', 'DataController@surat')->name('proses.surat');
Route::get('/tindak/lanjut', 'DataController@lanjut')->name('tindak.lanjut');

Route::post('/iumk/qrcode', 'IumkController@qrcode')->name('iumk.qrcode');

Route::get('/iumk/iumk', 'DataController@iumk')->name('iumk.iumk');
Route::get('/iumk/pdf/{id}', 'IumkController@cetak')->name('iumk.cetak');
Route::get('/iumk/qrcode/{id}', 'IumkController@qrcode')->name('iumk.qrcode');

Route::resource('/user', 'UserController');

Route::resource('/daftar', 'DaftarController');
Route::post('/daftar/{daftar}', 'DaftarController@proses')->name('daftar.proses');

Route::resource('/proses', 'ProsesController');

Route::resource('/iumk', 'IumkController');
Route::post('/iumk/{iumk}', 'IumkController@proses')->name('iumk.proses');




Route::resource('/tindak', 'TindakController');
