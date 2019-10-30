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

// Route::get('/', function () {
//     return view('front.templates.homepage');
// })->name('homepage');

// Route::get('/', function () {
//     return view('admin.templates.default');
// })->name('default');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/info/data', 'DataController@ijins')->name('info.data');
Route::get('/info/non', 'DataController@nonijins')->name('info.non');

Route::resource('/info', 'InfoController');





Route::resource('/ajukan', 'AjukanController');

Route::resource('/iumk', 'IumkController');


Route::resource('/report', 'ReportController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
