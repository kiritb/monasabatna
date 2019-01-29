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
Route::get('customer_profile', function () {
    return view('005_4_3_1_customer_profile');
});
Route::get('customer_profile_cancel_booking', function () {
    return view('customer_profile_cancel_booking');
});
Route::get('faqs', function () {
    return view('faqs');
});
Route::get('eventorganiserslist', function () {
    return view('dynamicpages/eventorganiserslist');
});
Route::get('paymentconfirmation', function () {
    return view('dynamicpages/paymentconfirmation');
});

Route::get('infoguestlogin', function () {
    return view('dynamicpages/infoguestlogin');
});

Route::get('packagelist', function () {
    return view('dynamicpages/packagelist');
});
Route::get('supplierdetails', function () {
    return view('dynamicpages/supplierdetails');
});
Route::get('vendorsignup', function () {
    return view('vendor_signup');
});
Route::get('venue_dashboard_filter', function () {
    return view('008_06_venue_dashboard_filter');
});

Route::get('package_event_organisers', function () {
    return view('004_4_4_package_event_organisers');
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
    return view('packagedetails');
});

Route::get('packagedetails', function () {
    return view('dynamicpages/packagedetails');
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

Route::post('facilitate', 'Web\HomeController@facilitateService');

Route::get('vennues', 'Web\VennueController@vennueListing')->name('venuelist');

Route::get('vennues/{id}', 'Web\VennueController@venueDetails')->name('venuedetails');

Route::get('events/upcoming', 'Web\EventController@eventListing')->name('eventlist');

Route::get('events/upcoming/{id}', 'Web\EventController@upComingeventDetails')->name('upcomingeventdetails');

Route::get('events/organisers', 'Web\EventController@getEventOrgainsersList')->name('eventorganisers');

Route::get('events/organisers/{id}', 'Web\EventController@getEventOrgainserDetails')->name('organiserdetails');

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
Route::get('upcomingevents', 'Web\EventController@eventListing')->name('upcomingevents');

Route::post('login', 'Auth\LoginController@login');
Route::post('users', 'Auth\RegisterController@createUser');
Route::post('verifyotp', 'Auth\RegisterController@verifyotp');
Route::post('resendotp', 'Auth\RegisterController@resendotp');

Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', 'Auth\LoginController@webLogout');
});