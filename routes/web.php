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
//     return view('input');
// });

Route::get('/', 'ContactController@input')->name('input');
Route::post('/confirm', 'ContactController@confirm')->name('confirm');
Route::post('/complete', 'ContactController@complete')->name('complete');

Route::get('/admin', 'AdminController@admin_index')->name('admin_index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
