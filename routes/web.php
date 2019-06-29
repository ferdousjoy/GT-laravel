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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'SiteController@website');
Route::get('/dashboard', 'DashBoardController@dashboard');

// Banner Section
Route::get('/banner/page', 'DashBoardController@banner')->name('banner');
Route::post('/banner/insert', 'DashBoardController@bannerinsert')->name('bannerinsert');

// Banner Section
Route::get('/service/page', 'DashBoardController@service')->name('service');
Route::post('/service/insert', 'DashBoardController@serviceinsert')->name('serviceinsert');

//  Solution Section
Route::get('/solution/page', 'DashBoardController@solution')->name('solution');
Route::post('/solution/insert', 'DashBoardController@solutioninsert')->name('solutioninsert');
//  GT Solution Section
Route::get('/gtsolution/page', 'DashBoardController@gtsolution')->name('gtsolution');
Route::post('/gtsolution/insert', 'DashBoardController@gtsolutioninsert')->name('gtsolutioninsert');

//  CAD Solution Section
Route::get('/cadsolution/page', 'DashBoardController@cadsolution')->name('cadsolution');
Route::post('/cad/solution/insert', 'DashBoardController@cadsolutioninsert')->name('gtsolutioninsert');
//  Biometric Section
Route::get('/biometric/page', 'DashBoardController@biometric')->name('biometric');
Route::post('/biometric/insert', 'DashBoardController@biometricinsert')->name('biometricinsert');

// Ups Section
Route::get('/ups/page', 'DashBoardController@ups')->name('ups');
Route::post('/ups/insert', 'DashBoardController@upsinsert')->name('upsinsert');

// Fire Section
Route::get('/fire/page', 'DashBoardController@fire')->name('fire');
Route::post('/fire/insert', 'DashBoardController@fireinsert')->name('fireinsert');

// event Section
Route::get('/event/page', 'DashBoardController@event')->name('event');
Route::post('/event/insert', 'DashBoardController@eventinsert')->name('eventinsert');


// Partner Section
Route::get('/Partner/page', 'DashBoardController@partner')->name('Partner');
Route::post('/Partner/insert', 'DashBoardController@Partnerinsert')->name('Partnerinsert');
// ALLEDIT
Route::get('/E5/{id}','DashBoardController@E5')->name('E5');
Route::get('/E4/{id}','DashBoardController@E4')->name('E4');
Route::get('/E3/{id}','DashBoardController@E3')->name('E3');
Route::get('/E2/{id}','DashBoardController@E2')->name('E2');
Route::get('/E1/{id}','DashBoardController@E1')->name('E1');
Route::POST('/U1','DashBoardController@U1')->name('U1');
Route::POST('/U2','DashBoardController@U2')->name('U2');
Route::POST('/U3','DashBoardController@U3')->name('U3');
Route::POST('/U4','DashBoardController@U4')->name('U4');
Route::POST('/U5','DashBoardController@U5')->name('U5');

// ALL DELETE
Route::get('/D1/{id}','DashBoardController@D1')->name('D1');
Route::get('/D2/{id}','DashBoardController@D2')->name('D2');
Route::get('/D3/{id}','DashBoardController@D3')->name('D3');
Route::get('/D4/{id}','DashBoardController@D4')->name('D4');
Route::get('/D5/{id}','DashBoardController@D5')->name('D5');
Route::get('/D6/{id}','DashBoardController@D6')->name('D6');
Route::get('/D8/{id}','DashBoardController@D8')->name('D8');
Route::get('/D9/{id}','DashBoardController@D9')->name('D9');
Route::get('/D10/{id}','DashBoardController@D10')->name('D10');
Route::get('/D11/{id}','DashBoardController@D11')->name('D11');
