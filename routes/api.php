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
  	Route::post('login', 'Auth\LoginController@login');
  	Route::get('home', 'Api\HomeController@index');
  	Route::get('vennues', 'Api\VennueController@vennueListing');
  	Route::get('events', 'Api\EventController@eventListing');
  	Route::get('venue/{id}', 'Api\VennueController@venueDetails');
    	
});

Route::middleware('jwt.auth')->group(function(){
    
    Route::get('logout', 'API\LoginController@logout');
});

// Route::get('/', function () {
//     return view('welcome');
// });