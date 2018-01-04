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
    return view('home');
});

Route::get('cc/themes', 'Cc\ThemeController@themes');
Route::get('cc/theme/{id?}', 'Cc\ThemeController@index');
Route::get('cc/activity/{id?}', 'Cc\ActivityController@index');
Route::get('cc/chapter/{id?}', 'Cc\ChapterController@index');