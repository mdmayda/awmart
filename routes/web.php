<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('content.index');
});

//Dashboard Admin
Route::get('/dashboard-home', function () {
    return view('content.admin.dashboardHome');
});
Route::get('/dashboard-account', function () {
    return view('content.admin.dashboardAccount');
});
Route::get('/dashboard-member', function () {
    return view('content.admin.dashboardMember');
});
Route::get('/dashboard-product', function () {
    return view('content.admin.dashboardProduct');
});
Route::get('/dashboard-shipment', function () {
    return view('content.admin.dashboardShipment');
});
//DashboardAdmin
Route::get('/belanja', function () {
    return view('content.belanja');
});
Route::get('/product-details', function () {
    return view('content.productDetails');
});
Route::get('/pemesanan', function () {
    return view('content.pemesanan');
});
Route::get('/buy', function () {
    return view('content.buy');
});
