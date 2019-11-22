<?php


Route::get('/', 'HomeController@index')->name('dashboard');

// taruh diatas datatable
Route::get('/user/data', 'DataController@data')->name('user.data');
Route::get('/daftar/layanan', 'DataController@layanan')->name('daftar.layanan');
Route::get('/proses/surat', 'DataController@surat')->name('proses.surat');
Route::get('/tindak/lanjut', 'DataController@lanjut')->name('tindak.lanjut');
Route::get('/suket/suket', 'DataController@suket')->name('suket.suket');
Route::get('/nonijin/nonijin', 'DataController@nonijin')->name('nonijin.nonijin');
Route::get('/ijin/ijin', 'DataController@ijin')->name('ijin.ijin');
Route::get('/syarat/syarat', 'DataController@syarat')->name('syarat.syarat');
Route::get('/pejabat/pejabat', 'DataController@pejabat')->name('pejabat.pejabat');
Route::get('/role/role', 'DataController@role')->name('role.role');

Route::post('/iumk/qrcode', 'IumkController@qrcode')->name('iumk.qrcode');

Route::get('/iumk/iumk', 'DataController@iumk')->name('iumk.iumk');
Route::get('/iumk/pdf/{id}', 'IumkController@cetak')->name('iumk.cetak');
Route::get('/iumk/qrcode/{id}', 'IumkController@qrcode')->name('iumk.qrcode');

Route::get('/suket/pdf/{id}', 'SuketController@cetak')->name('suket.cetak');
Route::get('/suket/qrcode/{id}', 'SuketController@qrcode')->name('suket.qrcode');

Route::get('/user/rolper', 'UserController@rolePermission')->name('user.role_permission');
Route::resource('/user', 'UserController')->middleware('role:admin');
// Route::post('/user/permission', 'UserController@addPermission')->name('users.add_permission');


Route::resource('/daftar', 'DaftarController');
Route::post('/daftar/{daftar}', 'DaftarController@proses')->name('daftar.proses');

Route::resource('/proses', 'ProsesController');

Route::resource('/iumk', 'IumkController');
Route::post('/iumk/{iumk}', 'IumkController@proses')->name('iumk.proses');

Route::resource('/suket', 'SuketController');
Route::post('/suket/{suket}', 'SuketController@proses')->name('suket.proses');




Route::resource('/tindak', 'TindakController');

Route::resource('/nonijin', 'NonijinController')->middleware('role:admin');

Route::resource('/ijin', 'IjinController')->middleware('role:admin');

Route::resource('/syarat', 'SyaratController')->middleware('role:admin');

Route::resource('/pejabat', 'PejabatController')->middleware('role:admin');

Route::resource('/role', 'RoleController')->middleware('role:admin');
