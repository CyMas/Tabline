<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/pemasukan','TablineController@pemasukan');

Route::get('/index',['as'=>'admin','uses'=>"TablineController@index"]);

Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');

Route::get('/register','Auth\AuthController@getRegister');
Route::post('/register','Auth\AuthController@postRegister');

Route::get('tabline/member/history/permintaan', 'TablineController@memberhistorypermintaan');
Route::get('tabline/member/permintaan', 'TablineController@memberpermintaan');
Route::post('tabline/member/permintaan/save', 'TablineController@memberpermintaansave');

Route::get('tabline/member/history/setoran', 'TablineController@memberhistorysetoran');
Route::get('tabline/member/setoran', 'TablineController@membersetoran');
Route::post('tabline/member/setoran/save', 'TablineController@membersetoransave');

Route::get('tabline/member/history/permintaan', 'TablineController@memberhistorypermintaan');
Route::get('tabline/member/history/permintaan/edit/{id}', 'TablineController@memberhistorypermintaanedit');
Route::post('tabline/member/history/permintaan/update', 'TablineController@memberhistorypermintaanupdate');
Route::get('tabline/member/pengeluaran/Report', 'TablineController@memberpengeluaranreport');

Route::get('tabline/member/history/setoran', 'TablineController@memberhistorysetoran');
Route::get('tabline/member/history/setoran/edit/{id}', 'TablineController@memberhistorysetoranedit');
Route::post('tabline/member/history/setoran/update', 'TablineController@memberhistorysetoranupdate');
Route::get('tabline/member/pemasukan/Report', 'TablineController@memberpemasukanreport');

Route::get('reportpengeluaran','TablineController@reportpengeluaran');


Route::get('/logout','Auth\AuthController@getLogout');/**/

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/