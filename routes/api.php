<?php


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

Route::group(['prefix' => 'v1'], function () {
    Route::post('users', 'Auth\RegisterController@createUser');
    Route::post('verifyotp', 'Auth\RegisterController@verifyotp');
    Route::post('resendotp', 'Auth\RegisterController@resendotp');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('home', 'Api\HomeController@index');
    Route::get('vennues/filters', 'Api\VennueController@getFilters');
    Route::get('vennues', 'Api\VennueController@vennueListing');
    Route::get('events/filters', 'Api\EventController@getFilters');
    Route::get('events/upcoming', 'Api\EventController@eventListing');
    Route::get('vennues/{id}', 'Api\VennueController@venueDetails');
    Route::get('events/organisers', 'Api\EventController@getEventOrgainsersList');
    Route::get('events/organisers/{id}', 'Api\EventController@getEventOrgainserDetails');
    Route::get('themes/{id}', 'Api\EventController@getThemeDetails');
    Route::get('expressdeals', 'Api\VennueController@getExpressDeals');
    Route::get('order', 'Api\OrderController@createOrder');
    Route::get('cities', 'Api\CityController@getCities');
    Route::get('home/image', 'Api\HomeController@getImage');
    Route::get('faqs', 'Api\FaqController@getFaqs');
    Route::get('aboutus', 'Api\HomeController@aboutUs');
    Route::get('whyus', 'Api\HomeController@whyUs');
    Route::post('contactus', 'Api\HomeController@contactUs');
});

Route::group(['middleware' => ['jwt.verify'], 'prefix' => 'v1'], function () {
    Route::get('logout', 'Auth\LoginController@logout');
});
