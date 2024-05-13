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
Route::get('/dashboardHome', function () {
    return view('content.admin.dashboardHome');
});
Route::get('/dashboardProduct', function () {
    return view('content.admin.dashboardProduct');
});
Route::get('/dashboardShipment', function () {
    return view('content.admin.dashboardShipment');
});
Route::get('/dashboardMember', function () {
    return view('content.admin.dashboardMember');
});
Route::get('/dashboardAccount', function () {
    return view('content.admin.dashboardAccount');
});
Route::get('/produkDetail', function () {
    return view('content.productDetail');
});
