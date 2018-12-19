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
    return view('home');
});
Route::get('vendorsignup', function () {
    return view('vendor_signup');
});
Route::get('package_event_organisers', function () {
    return view('004_4_4_package_event_organisers');
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
Route::get('indexpage', function () {
    return view('Home_page');
});