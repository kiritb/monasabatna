<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function () {
  	
  	Route::post('users', 'Auth\RegisterController@createUser');
    Route::post('verifyotp', 'Auth\RegisterController@verifyotp');
    Route::post('resendotp', 'Auth\RegisterController@resendotp');
  	Route::post('login', 'Auth\LoginController@login');
  	Route::get('home', 'Api\HomeController@index');
    Route::get('vennues/filters', 'Api\VennueController@getFilters');
  	Route::get('vennues', 'Api\VennueController@vennueListing');
  	Route::get('events/upcoming', 'Api\EventController@eventListing');
  	Route::get('vennues/{id}', 'Api\VennueController@venueDetails');
  	Route::get('events/organisers', 'Api\EventController@getEventOrgainsersList');
    Route::get('events/organisers/{id}', 'Api\EventController@getEventOrgainserDetails');
    Route::get('themes/{id}', 'Api\EventController@getThemeDetails');
    Route::get('expressdeals', 'Api\VennueController@getExpressDeals');
    Route::get('order', 'Api\OrderController@createOrder');

    	
});

Route::middleware('jwt.auth')->group(function(){
    
    Route::get('logout', 'API\LoginController@logout');
});

// Route::get('/', function () {
//     return view('welcome');
// });