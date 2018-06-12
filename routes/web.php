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
    return view('welcome');
});
Route::get('/payment', 
    [
    'as'=>'get-payment-view',
    'uses'=>'HomeController@getPaymentView'
    ]
);
Route::get('/clientinfo', 
    [
    'as'=>'get-client-info',
    'uses'=>'HomeController@getClientInfo'
    ]
);

Route::get('/serviceRecord', 
    [
    'as'=>'get-service-record',
    'uses'=>'HomeController@getServiceRecord'
    ]
);

Route::get('/renewalRecord', 
    [
    'as'=>'get-renewal',
    'uses'=>'HomeController@getRenewal'
    ]
);

Route::get('/clientStaff', 
    [
    'as'=>'get-client-staff',
    'uses'=>'HomeController@getStaff'
    ]
);