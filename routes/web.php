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

Route::get('/', function () {
    return view('front.templates.homepage');
})->name('homepage');

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/info/data', 'front\DataController@ijins')->name('info.data');
Route::get('/info/non', 'front\DataController@nonijins')->name('info.non');
Route::get('/info/proses', 'front\DataController@prosessurat')->name('info.proses');
Route::get('/info/syarat', 'front\DataController@syarat')->name('info.syarat');

Route::resource('/info', 'front\InfoController');


Route::resource('/ajukan', 'front\AjukanController');

Route::resource('/iumk', 'front\IumkController');
Route::resource('/nikah', 'front\NikahController');
Route::resource('/suket', 'front\SuketController');

Route::resource('/report', 'front\ReportController');


Auth::routes([
    'verify' => true,
    'reset' => false,
    'register' => false,
    ]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
