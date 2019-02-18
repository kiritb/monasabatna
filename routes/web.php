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
Route::get('blogs', function () {
    return view('blogs');
});

Route::get('customer_signup', function () {
    return view('auth/customer_signup');
});

Route::get('customer_signin', function () {
    return view('auth/customer_signin');
});

Route::get('customer_profile_flex', function () {
    return view('customer_profile_flex');
});

Route::get('customer_profile_cancelbooking_confirmation', function () {
    return view('customer_profile_cancelbooking_confirmation');
});

Route::get('customer_profile_venue_update', function () {
    return view('customer_profile_venue_update');
});

Route::get('customer_profile_paying_cash', function () {
    return view('customer_profile_paying_cash');
});

Route::get('customer_profile_online_payment', function () {
    return view('customer_profile_online_payment');
});

Route::get('customer_profile_events', function () {
    return view('customer_profile_events');
});

Route::get('customer_profile_eventorganisers', function () {
    return view('customer_profile_eventorganisers');
});

Route::get('customer_profile_suppliers', function () {
    return view('customer_profile_suppliers');
});

Route::get('customer_profile_venues_bookinghistory', function () {
    return view('customer_profile_venues_bookinghistory');
});

Route::get('customer_profile_cancel_booking', function () {
    return view('customer_profile_cancel_booking');
});

Route::get('faqs', function () {
    return view('faqs');
});

Route::get('paymentconfirmation', function () {
    return view('dynamicpages/paymentconfirmation');
});

Route::get('infoguestlogin', function () {
    return view('dynamicpages/infoguestlogin');
});

Route::get('registration', function () {
    return view('dynamicpages/vendor_registration');
});

Route::get('vendorforgetpwd', function () {
    return view('dynamicpages/vendor_forgetpwd');
});

Route::get('vendorotp', function () {
    return view('dynamicpages/vendor_otp');
});

Route::get('vendorretypepwd', function () {
    return view('dynamicpages/vendor_retypepwd');
});

Route::get('vendordashboard', function () {
    return view('vendor-panel/vendordashboard');
});

Route::get('vendordashboardtrial', function () {
    return view('vendor-panel/vendordashboardtrial');
});

Route::get('vendorbookings', function () {
    return view('vendor-panel/vendorbookings');
});

Route::get('vendorvenue', function () {
    return view('vendor-panel/vendorvenue');
});

Route::get('vendorservices', function () {
    return view('vendor-panel/vendorservices');
});

Route::get('vendorterms', function () {
    return view('vendor-panel/vendorterms');
});

Route::get('dashboardvenueform', function () {
    return view('vendor-panel/dashboardvenueform');
});

Route::get('vendorprofile', function () {
    return view('vendor-panel/vendorprofile');
});

Route::get('vendoramenities', function () {
    return view('vendor-panel/vendoramenities');
});

Route::get('dashboardserviceform', function () {
    return view('vendor-panel/dashboardserviceform');
});

Route::get('vendorsignup', function () {
    return view('vendor_signup');
});

Route::get('package_venues', function () {
    return view('package_venues');
});

Route::get('vendorregistration', function () {
    return view('venue_registration_done');
});

Route::get('venuedetailstwo', function () {
    return view('venue_details_two');
});

Route::get('packagedetails', function () {
    return view('detail_pages/packagedetails');
});

Route::get('venuedetails', function () {
    return view('dynamicpages/venuedetails');
});

Route::get('wishlist', function () {
    return view('dynamicpages/newwishlist');
});

Route::get('reset', array('as' => 'password.request', function () {
    return view('auth.passwords.reset');
}));

Route::get('/', 'Web\HomeController@index')->name('home');

Route::post('facilitate', 'Api\HomeController@facilitateService');

Route::get('listing', function () {
    return view('list_pages/listing', ['page' => 'listing']);
});

Route::get('upcoming-events', function () {
    return view('list_pages/upcoming-events', ['page' => 'upcominglisting']);
});

Route::get('expressdeals', function () {
    return view('list_pages/expressdeals', ['page' => 'is_express_deal']);
});

Route::get('venues', 'Web\VennueController@vennueListing')->name('venue-list');

Route::get('venues/{id}', 'Web\VennueController@venueDetails')->name('venuedetails');

Route::get('events/upcoming', 'Web\EventController@eventListing')->name('eventlist');

Route::get('events/upcoming/{id}', 'Web\EventController@upComingeventDetails')->name('upcomingeventdetails');

Route::get('events/organisers', 'Web\EventController@getEventOrgainsersList')->name('eventorganisers-list');

Route::get('events/organisers/{id}', 'Web\EventController@getEventOrgainserDetails')->name('organiserdetails');

Route::get('suppliers', 'Web\EventController@getSuppliersList')->name('supplier-list');

Route::get('suppliers/{id}', 'Web\EventController@getSupplierDetails')->name('supplierdetails');

Route::get('packages/suppliers', 'Web\EventController@getPackageSupplierList');

Route::get('packages/eventorganisers', 'Web\EventController@getPackageEventOrganisersList');

Route::get('events/organisers/packages/{id}', 'Web\EventController@getPackageDetails');

Route::get('suppliers/packages/{id}', 'Web\EventController@getSupplierPackageDetails');

Route::get('aboutus', 'Web\HomeController@aboutUs')->name('aboutus');

Route::get('contactus', function () {
    return view('static/contactus');
});

Route::get('whyus', array('as' => 'whyus', function () {
    return view('static/whyus');
}));

Route::get('login', array('as' => 'login', function () {
    return view('auth.customer_signin');
}));

Route::get('register', array('as' => 'register', function () {
    return view('auth.customer_signup');
}));

Route::get('static/faqs', 'Web\FaqController@getFaqs')->name('faqs');

Route::post('login', 'Auth\LoginController@login');
Route::post('users', 'Auth\RegisterController@createUser');
Route::post('verifyotp', 'Auth\RegisterController@verifyotp');
Route::post('resendotp', 'Auth\RegisterController@resendotp');

Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', 'Auth\LoginController@webLogout');
});

Route::get('vendorvenue', 'Web\VennueController@listVenue');
Route::get('vendoramenities', 'Web\AmenitieController@getAmenitieType');
Route::post('add_amenities', 'Web\AmenitieController@addAmenitieType');
Route::resource('amenitie_types', 'Web\AmenitieController');

Route::get('vendorvenue', 'Web\VennueController@listVenue');
Route::post('edit_amenities', 'Web\AmenitieController@editAmenitieType');
Route::get('vendoramenities/{id}', 'Web\AmenitieController@getAmenitieType')->name('vendoramenities');
Route::post('deleteamenities', 'Web\AmenitieController@deleteAmenitieType');

Route::get('vendorterms', 'Web\VendorController@getVendorPolicy');
Route::post('update_terms', 'Web\VendorController@updateVendorPolicy');

// Route::resource('amenitie_types', 'Web\AmenitieController');