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

Route::get('themes', 'Cc\ThemeController@themes');
//Route::get('materials', 'FrontendController@materials')->name('materials');
Route::get('theme/{id?}', 'Cc\ThemeController@index');
Route::get('activity/{id?}', 'Cc\ActivityController@index');
Route::get('chapter/{id?}', 'Cc\ChapterController@index');


Route::get('macros', 'FrontendController@macros')->name('macros');
Route::get('cshome', 'FrontendController@cshome')->name('cshome');
Route::get('sign_in', 'FrontendController@sign_in')->name('signin');
Route::get('lesson_list', 'FrontendController@lesson_list')->name('teacher.lesson.list');
Route::get('sign_in_student', 'FrontendController@sign_in_student')->name('student.signin');
Route::get('sign_in_teacher', 'FrontendController@sign_in_teacher')->name('teacher.signin');
Route::get('upload_video', 'FrontendController@upload_video')->name('upload_video');
Route::get('club/{id}', 'FrontendController@teacher_club_overview')->name('teacher_club_overview');
Route::get('club/{id}/materials', 'FrontendController@teacher_club_overview')->name('teacher_club_overview');

Route::get('scratch', 'FrontendController@scratch')->name('scratch');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');