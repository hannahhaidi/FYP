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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*

Route::get('/main', function () {
    //return view('welcome');
    return 'Students Activity Management System';
});
*/

/*Route::get('/about', function(){
    return view('pages.about');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/activity', 'PagesController@activity');
Route::post('/about', 'PagesController@login');
Route::get('/pec', 'PagesController@pec');
Route::get('/login', 'PagesController@login');
Route::resource('gems', 'GemsController');
Route::resource('activity', 'ActivityController');
Route::resource('skill', 'SkillController');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/suggestion', 'PagesController@suggestion');
Route::get('/suggestion/{activity_code}', 'PagesController@show')->name('resource.show');
Route::get('/lectureractivity', 'AdminsController@lectureractivity');

Route::prefix('admins')->group(function(){
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('', 'AdminsController@index')->name('admins.index');
    Route::get('/{id}', 'AdminsController@show')->name('resource.show');
    Route::get('/showform/{activity_code}', 'AdminsController@showform')->name('admins.showform');
    Route::get('/showform/{activity_code}/qrcode', 'AdminsController@qrcode');
   
   
});


Route::get('/studentslist', 'AdminsController@studentslist');
Route::resource('lecturers', 'LecturersController');
Route::get('/createactivity', 'AdminsController@createactivity');
Route::post('/store', 'AdminsController@store');
Route::get('/activitylist', 'AdminsController@activitylist');
Route::get('/activitylist/{activity_code}', 'StudentsController@show')->name('resource.show');
Route::get('/registration', 'AdminsController@registration');
Route::get('/registration/{activity_code}', 'RegistrationController@show')->name('resource.show');
Route::get('/analysis', 'AdminsController@analysis');
Route::get('/activity/{activity_code}/register', 'PagesController@registeractivity');
Route::post('/studentregister', 'PagesController@store');


Route::get('analysis', 'AnalysisController@analysis');
Route::get('downloadExcel/{type}', 'AnalysisController@downloadExcel');
Route::post('importExcel', 'AnalysisController@importExcel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




