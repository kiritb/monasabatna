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

Route::get('aboutus', function () {
    return view('004_6_about_us');
});
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
Route::get('vendorsignup', function () {
    return view('vendor_signup');
});
Route::get('venue_dashboard_filter', function () {
    return view('008_06_venue_dashboard_filter');
});
Route::get('eventorganisers', function () {
    return view('eventorganisers');
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
Route::get('venuedetails_two', function () {
    return view('001_05_venue_details_2');
});
Route::get('upcomingevents', function () {
    return view('001_05-upcoming-events');
});
Route::get('event_organisers_details', function () {
    return view('003_2_event_organisers_details');
});
Route::get('event_organiser_booking_details', function () {
    return view('003_3_7_Event_organiser_booking_details');
});
Route::get('suppliers_package', function () {
    return view('004_2_Suppliers_package');
});
Route::get('suppliers_package_detail', function () {
    return view('004_3_Suppliers_package_detail');
});
Route::get('packagedetailsfive', function () {
    return view('package_detailsfive');
});
Route::get('upcominguserclick', function () {
    return view('upcoming_userclick');
});
Route::get('upcomingevents', function () {
    return view('upcomingevents');
});
Route::get('wishlist', function () {
    return view('newwishlist');
});

Route::get('reset', array('as' => 'password.request', function () {
    return view('auth.passwords.reset');
}));

Route::get('/', 'Web\HomeController@index')->name('home');

Route::get('/venuelist', 'Web\VennueController@vennueListing')->name('venuelist');

Route::get('/events/upcoming', 'Web\EventController@eventListing')->name('eventlist');

Route::get('login', array('as' => 'login', function () {
    return view('auth.customer_signin');
}));

Route::post('login', 'Auth\LoginController@login');

Route::get('register', array('as' => 'register', function () {
    return view('auth.customer_signup');
}));
