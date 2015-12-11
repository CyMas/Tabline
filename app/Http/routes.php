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


Route::get('/welcome','TablineController@welcome');

Route::get('/contact', 'TablineController@contact');
Route::post('contactsave','TablineController@contactsave');


Route::get('/pemasukan','TablineController@pemasukan');


Route::get('/index',['as'=>'admin','uses'=>"TablineController@index"]);

Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');

Route::get('/register','Auth\AuthController@getRegister');
Route::post('/register','Auth\AuthController@postRegister');

Route::get('tabline/member/history/permintaan', 'TablineController@memberhistorypermintaan');
Route::get('tabline/member/permintaan', 'TablineController@memberpermintaan');
Route::post('tabline/member/permintaan/save', 'TablineController@memberpermintaansave');

Route::get('tabline/member/histori/setoran', 'TablineController@memberhistorisetoran');
Route::get('tabline/member/setoran', 'TablineController@membersetoran');
Route::post('tabline/member/setoran/save', 'TablineController@membersetoransave');

Route::get('tabline/member/histori/permintaan', 'TablineController@memberhistoripermintaan');
Route::get('tabline/member/histori/permintaan/edit/{id}', 'TablineController@memberhistoripermintaanedit');
Route::post('tabline/member/histori/permintaan/update', 'TablineController@memberhistoripermintaanupdate');
Route::get('tabline/member/pengeluaran/Report', 'TablineController@memberpengeluaranreport');

Route::get('tabline/member/histori/setoran', 'TablineController@memberhistorisetoran');
Route::get('tabline/member/histori/setoran/edit/{id}', 'TablineController@memberhistorisetoranedit');
Route::post('tabline/member/histori/setoran/update', 'TablineController@memberhistorisetoranupdate');
Route::get('tabline/member/pemasukan/Report', 'TablineController@memberpemasukanreport');

Route::get('reportpengeluaran','TablineController@reportpengeluaran');

Route::get('/histori/pemasukan', 'TablineController@adminhistoripemasukan');
Route::post('/histori/pemasukan/update', 'TablineController@adminhistoripemasukanupdate');
Route::get('/histori/pemasukan/edit/{id}', 'TablineController@adminhistoripemasukanedit');

Route::get('/histori/pengeluaran', 'TablineController@adminhistoripengeluaran');
Route::post('/histori/pengeluaran/update', 'TablineController@adminhistoripengeluaranupdate');
Route::get('/histori/pengeluaran/edit/{id}', 'TablineController@adminhistoripengeluaranedit');

Route::get('/logout','Auth\AuthController@getLogout');/**/

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/