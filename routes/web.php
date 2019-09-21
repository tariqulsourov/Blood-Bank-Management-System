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

Route::get('/', [
    'uses' => 'bloodbankmanagementController@index',
    'as' => '/'
]);

Auth::routes();

/** Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', [
    'uses' => 'Auth\LoginController@showAdminLoginForm',
    'as'   => 'login.adminlogin'
]);
 */

Route::get('/login/admin', [
    'uses' => 'Auth\LoginController@showAdminLoginForm',
    'as'   => 'login.adminloginform'
]);

Route::get('/login/direct_donor', [
    'uses' => 'Auth\LoginController@showDirect_donorLoginForm',
    'as'   => 'login.direct_donorloginform'
]);

Route::get('/login/donor_at_blood_bank', [
    'uses' => 'Auth\LoginController@showDonor_at_blood_bankLoginForm',
    'as'   => 'login.donor_at_blood_bankloginform'
]);

Route::get('/login/external_blood_bank', [
    'uses' => 'Auth\LoginController@showExternal_blood_bankLoginForm',
    'as'   => 'login.external_blood_bankloginform'
]);

Route::post('/login/admin', [
    'uses' => 'Auth\LoginController@adminLogin',
    'as'   => 'frontend.login.adminlogin'
]);

Route::post('/login/direct_donor', [
    'uses' => 'Auth\LoginController@direct_donorLogin',
    'as'   => 'frontend.login.direct_donorlogin'
]);

Route::post('/login/donor_at_blood_bank', [
    'uses' => 'Auth\LoginController@donor_at_blood_bankLogin',
    'as'   => 'frontend.login.donor_at_blood_banklogin'
]);

Route::post('/login/external_blood_bank', [
    'uses' => 'Auth\LoginController@external_blood_bankLogin',
    'as'   => 'frontend.login.external_blood_banklogin'
]);

Route::get('/register/admin', [
    'uses' => 'Auth\RegisterController@showAdminRegisterForm',
    'as'   => 'frontend.reg.adminreg'
]);

Route::get('/register/direct_donor', [
    'uses' => 'Auth\RegisterController@showDirect_donorRegisterForm',
    'as'   => 'frontend.reg.direct_donorreg'
]);

Route::get('/register/donor_at_blood_bank', [
    'uses' => 'Auth\RegisterController@showDonor_at_blood_bankRegisterForm',
    'as'   => 'frontend.reg.donor_at_blood_bankreg'
]);

Route::get('/register/external_blood_bank', [
    'uses' => 'Auth\RegisterController@showExternal_blood_bankRegisterForm',
    'as'   => 'frontend.reg.external_blood_bankreg'
]);

Route::post('/register/admin', [
    'uses' => 'Auth\RegisterController@createAdmin',
    'as'   => 'frontend.reg.adminreg'
]);

Route::post('/register/direct_donor', [
    'uses' => 'Auth\RegisterController@createDirect_donor',
    'as'   => 'frontend.reg.direct_donorreg'
]);

Route::post('/register/donor_at_blood_bank', [
    'uses' => 'Auth\RegisterController@createDonor_at_blood_bank',
    'as'   => 'frontend.reg.donor_at_blood_bankreg'
]);

Route::post('/register/external_blood_bank', [
    'uses' => 'Auth\RegisterController@createExternal_blood_bank',
    'as'   => 'frontend.reg.external_blood_bankreg'
]);



Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'frontend.dash.admindash');
Route::view('/direct_donor', 'frontend.dash.direct_donordash');
Route::view('/donor_at_blood_bank', 'frontend.dash.donor_at_blood_bankdash');
Route::view('/external_blood_bank', 'frontend.dash.external_blood_bankdash');


Auth::routes();


Route::get('/donor_to_people', [
    'uses' => 'bloodbankmanagementController@donor_to_people',
    'as'   => 'donor_to_people'
]);

Route::get('/donor_at_bloodbank', [
    'uses' => 'bloodbankmanagementController@donor_at_bloodbank',
    'as'   => 'donor_at_bloodbank'
]);

Route::get('/bloodbank', [
    'uses' => 'bloodbankmanagementController@bloodbank',
    'as'   => 'bloodbank'
]);

Route::post('/receiverinfo', [
    'uses' => 'bloodbankmanagementController@blood_receiver',
    'as' => 'store'
    ]);

Route::post('/patientinfo', [
    'uses' => 'bloodbankmanagementController@patientinfostore',
    'as' => 'patientstore'
]);

Route::get('/bloodreceiverform', [
    'uses' => 'bloodbankmanagementController@blood_receiver_form',
    'as' => 'frontend.dash.bloodreceiverform'
]);


Route::get('/admin', [
    'uses' => 'bloodbankmanagementController@admindashboard',
    'as' => 'frontend.dash.admindash'
]);

Route::get('/blood_type_wise', [
    'uses' =>  'infoController@bloodtype',
    'as' => 'frontend.information.bloodtype'
]);

Route::get('/enter_age', [
    'uses' => 'infoController@agewiseform',
    'as' => 'frontend.information.enterage'
]);

Route::post('/age_wise', [
    'uses' =>  'infoController@agewise',
    'as' => 'agebetween'
]);

Route::get('/sendsms', [
    'uses' => 'smsController@smsform',
    'as' => 'frontend.dash.sendsmsform'
]);

Route::post('/smssent', [
    'uses' => 'smsController@sendsms',
    'as' => 'smssent'
]);

Route::get('/collectbloodfromdonorform', [
    'uses' => 'bloodbankmanagementController@checkdonorform',
    'as' => 'frontend.dash.collectbloodform'
]);

Route::post('/collectbloodfromdonor', [
    'uses' => 'bloodbankmanagementController@checkdonor',
    'as' => 'searchdonorandblood'
]);

Route::get('/bloodbagform', [
    'uses' => 'bloodbankmanagementController@bloodbagform',
    'as' => 'frontend.dash.bloodbagform'
]);

Route::post('/bloodbagstore', [
    'uses' => 'bloodbankmanagementController@bloodbagstore',
    'as' => 'bloodbagstore'
]);




/** Route::get('/home', 'HomeController@index')->name('home'); */



