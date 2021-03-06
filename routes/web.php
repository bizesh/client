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
});
*/

Route::get('/',
    ['uses' =>  'HomeController@getClientInfoList']
);

Route::get('/payment', 

    [
        'as'=>'get-payment-view',
        'uses' =>  'HomeController@getClientPaymentsInfo']
    
);
Route::get('/clientinfo', 
    [
    'as'=>'get-client-info',
    'uses'=>'HomeController@getClientInfoList'
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
    'uses'=>'HomeController@getClientRenewalsInfo'
    ]
);

Route::get('/clientStaff', 
    [
    'as'=>'get-client-staff',
    'uses'=>'HomeController@getStaff'
    ]
);

Route::get('/servicePayments', 
    [
    'as'=>'get-service-payments',
    'uses'=>'HomeController@getServicePayments'
    ]
);


Route::get('/customSearch', 
    [
    'as'=>'get-search-view',
    'uses'=>'HomeController@getSearchView'
    ]
);

Route::get('/searchResults', 
    [
    'as'=>'get-search-results',
    'uses'=>'HomeController@getSearchResults'
    ]
);

Route::post('/insertClient', 
    [
    'as'=>'insertClient',
    'uses'=>'InsertController@storeClient'
    ]
);

Route::post('/insertService', 
    [
    'as'=>'insertService',
    'uses'=>'InsertController@storeService'
    ]
);

Route::post('/insertRenewal', 
    [
    'as'=>'insertRenewal',
    'uses'=>'InsertController@storeRenewal'
    ]
);

Route::post('/insertStaff', 
    [
    'as'=>'insertStaff',
    'uses'=>'InsertController@storeStaff'
    ]
);
