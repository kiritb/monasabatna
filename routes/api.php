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

    Route::post('otp/validate', 'Auth\LoginController@validateOtp');

    Route::post('resendotp', 'Auth\RegisterController@resendotp');

    Route::post('resendotp/register', 'Auth\RegisterController@resendotp');

    Route::post('login', 'Auth\LoginController@login');

    Route::post('password/forgot', 'Auth\LoginController@forgotPassword');

    Route::post('password/update', 'Auth\LoginController@updatePassword');

    Route::get('home', 'Api\HomeController@index');

    Route::get('expressdeals', 'Api\VennueController@getExpressDeals');

    Route::get('vennues/filters', 'Api\VennueController@getFilters');
    Route::get('vennues', 'Api\VennueController@vennueListing');
    Route::get('vennues/{id}', 'Api\VennueController@venueDetails');

    Route::get('events/filters', 'Api\EventController@getFilters');
    Route::get('events/upcoming', 'Api\EventController@eventListing');
    Route::get('events/upcoming/{id}', 'Api\EventController@upComingeventDetails');

    Route::get('events/organisers/filters', 'Api\EventController@getEventOrganinsersFilters');
    Route::get('events/organisers', 'Api\EventController@getEventOrgainsersList');
    Route::get('events/organisers/{id}', 'Api\EventController@getEventOrgainserDetails');
    Route::get('events/organisers/packages/{id}', 'Api\EventController@getPackageDetails');

    Route::get('suppliers/filters', 'Api\EventController@getSuppliersFilters');
    Route::get('suppliers', 'Api\EventController@getSuppliersList');
    Route::get('suppliers/{id}', 'Api\EventController@getSupplierDetails');
    Route::get('suppliers/packages/{id}', 'Api\EventController@getSupplierPackageDetails');

    Route::get('order', 'Api\OrderController@createOrder');

    Route::get('cities', 'Api\CityController@getCities');

    Route::get('home/image', 'Api\HomeController@getImage');

    Route::get('faqs', 'Api\FaqController@getFaqs');

    Route::get('aboutus', 'Api\HomeController@aboutUs');

    Route::get('whyus', 'Api\HomeController@whyUs');

    Route::post('contactus', 'Api\HomeController@contactUs');

    Route::post('facilitate', 'Api\HomeController@facilitateService');

    Route::get('blogs', 'Api\BlogController@getBlogs');

    Route::get('packages/suppliers', 'Api\EventController@getPackageSupplierList');

    Route::get('packages/eventorganisers', 'Api\EventController@getPackageEventOrganisersList');

    Route::post('vendor', 'Api\VendorController@createVendor');

    Route::post('vendor/login', 'Api\VendorController@Login');

    Route::get('cities', 'Api\HomeController@getCities');

    Route::get('wishlist', 'Api\HomeController@getWishList');

    Route::post('wishlist', 'Api\HomeController@addWishList');

    Route::get('terms', 'Api\HomeController@getGenericTerms');
});

Route::group(['middleware' => ['jwt.verify'], 'prefix' => 'v1'], function () {
    Route::get('logout', 'Auth\LoginController@logout');
    Route::post('blogs', 'Api\BlogController@postBlog');
    Route::get('users/{id}', 'Auth\LoginController@getUserDetails');
    Route::post('users/{id}', 'Auth\LoginController@updateUserDetails');
    Route::post('password/reset', 'Auth\LoginController@resetPassword');
    Route::post('reviews', 'Api\BlogController@postReviews');
    Route::post('users/{id}/image', 'Auth\LoginController@addProfileImage');
});

Route::post('edit_amenities', 'Web\AmenitieController@editAmenitieType');
Route::get('vendoramenities', 'Web\AmenitieController@getAmenitieType');
Route::post('add_amenities', 'Web\AmenitieController@addAmenitieType');
Route::post('vendordata', 'Web\VendorController@getVendorPolicy');
Route::post('update_terms', 'Web\VendorController@updateVendorPolicy');

Route::group(['middleware' => ['vendor.verify'], 'prefix' => 'v1'], function () {
    Route::get('vendor/update/{id}', 'Api\VendorController@updateVendor');
});
