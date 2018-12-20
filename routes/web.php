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
    return view('006_01_01_blogs');
});
Route::get('customer_signup', function () {
    return view('005_1_customer_signup');
});
Route::get('customer_signin', function () {
    return view('005_2_customer_signin');
});
Route::get('customer_profile_venueold', function () {
    return view('005_4_3_1_customer_profile_venueold');
});
Route::get('customer_profile', function () {
    return view('005_4_3_1_customer_profile');
});
Route::get('customer_profile_cancel_booking', function () {
    return view('005_4_3_1_customer_profile_cancel_booking');
});
Route::get('faqs', function () {
    return view('006_01_02_faqs');
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
    return view('004_4_5_package_venues');
});
Route::get('vendorregistration', function () {
    return view('venue_registration_done');
});
Route::get('venuedetails', function () {
    return view('001_05_venue_details');
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
Route::get('theme_detail', function () {
    return view('003_3_5_Theme_Detail');
});
Route::get('wishlist', function () {
    return view('newwishlist');
});
Route::get('indexpage', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
