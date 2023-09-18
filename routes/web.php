<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/login','AuthController@login')->name('login');
Route::post('/dologin','AuthController@dologin')->name('dologin');
Route::get('/reg','AuthController@register')->name('register');
Route::post('/doreg','AuthController@doregister')->name('doregister');
Route::get('/logout','AuthController@logout')->name('logout');


Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware'=>'admin'],function (){

Route::get('/','DashboardController@index')->name('admin.dashboard');
Route::get('/show_user','UserController@index')->name('admin.show_user');
Route::get('/show_pay','PaymentController@showpay')->name('admin.show_payment');
Route::get('/confirmation/{id}','PaymentController@confirmation')->name('admin.confirmation.payment');
Route::get('/confirmed_user','UserController@confirmed')->name('admin.confirmed.user');
Route::get('/body/{id}','UserController@body')->name('admin.body.user');
Route::get('/food_programme/{id}','UserController@food_get')->name('admin.food.programme.get');
Route::post('/food_programme/{id}','UserController@food_post')->name('admin.food.programme.post');
Route::get('/train_programme/{id}','UserController@train_get')->name('admin.train.programme.get');
Route::post('/train_programme/{id}','UserController@train_post')->name('admin.train.programme.post');
Route::get('/show_user_package/{id}','UserController@package_show_user')->name('admin.show.package');
Route::get('/show_user_program/{id}','UserController@programme_show_user')->name('admin.show.programme');
Route::get('/test','TestController@index')->name('admin.test.show');
Route::get('/face_time','TestController@face_time')->name('admin.face_time.show');
Route::get('/face_time/{id}','TestController@face_time_status')->name('admin.face_time.status.update');
Route::get('/test/download/{id}','TestController@test_download')->name('admin.test.download');



});

Route::group(['prefix'=> 'user' ,'namespace'=> 'user','middleware'=>'user'],function (){
Route::get('/Dashboard','DashboardController@index')->name('user.Dashboard');
Route::get('/non_programme','DashboardController@non_programme')->name('user.non_programme');
Route::get('/Competition_program','DashboardController@Competition_program')->name('user.Competition_program');
Route::get('/Diabetic_program','DashboardController@Diabetic_program')->name('user.Diabetic_program');
Route::get('/privet_program','DashboardController@privet_program')->name('user.privet_program');

Route::get('/form_body/{id}','DashboardController@form_body')->name('user.form_body.show');
Route::post('/form_body/store/{id}','DashboardController@body_profile_store')->name('user.body_profile.store');
Route::get('/package_selected','PackageController@index')->name('user.package.show');
Route::get('/package_selected/show_program/{id}','PackageController@show_program')->name('user.program.show');
Route::get('/test/send','TestController@index')->name('user.test');
Route::post('/test/send/store','TestController@store')->name('user.test.send');
    Route::get('/face_time','DashboardController@faceshow')->name('user.face.show');
    Route::post('/face_time/store','DashboardController@faceshow_stor')->name('user.face.store');


});

