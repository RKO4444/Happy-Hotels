<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/createhotel', [RegisterController::class, 'createhotel']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [LoginController::class, 'check']);
Route::post('/tokenvalidate', [LoginController::class, 'tokenvalidate']);
Route::post('/hotelRegister', [HotelController::class, 'store']);
Route::post('/hotelfind', [HotelController::class, 'hotelfind']);
Route::get('/hotellist', [HotelController::class, 'hotellist']);
Route::get('/roombyid/{id}', [RoomController::class, 'roombyid']);
Route::get('/customerbyid/{id}', [CustomerController::class, 'customerbyid']);
Route::get('/bookingdetail/{id}', [BookingController::class, 'detail']);
Route::get('/bookingdetailhotel/{id}', [BookingController::class, 'detailhotel']);
Route::get('/hotel/{id}/edit', [HotelController::class, 'shows']);
Route::put('/hotel/{id}/edit', [HotelController::class, 'edit']);
Route::put('/room/{id}/edit', [RoomController::class, 'edit']);
Route::post('/payment', [PaymentController::class, 'payment']);
Route::get('/customerdata', [CustomerController::class, 'index']);
Route::get('/customerdatacount', [CustomerController::class, 'count']);
Route::get('/hoteldata', [HotelController::class, 'index']);
Route::get('/bookingdata', [BookingController::class, 'index']);
Route::delete('/deletehotel/{id}',[HotelController::class, 'destroy']);
Route::delete('/deletecustomer/{id}',[CustomerController::class, 'destroy']);




Route::post('/tokenvalidate', [LoginController::class, 'tokenvalidate']);
Route::post('/hotelRegister', [HotelController::class, 'store']);
Route::get('/roombyid/{id}', [RoomController::class, 'roombyid']);
Route::get('/hotelbyid/{id}', [HotelController::class, 'hotelbyid']);
Route::get('/bookingdetailhotel/{id}', [BookingController::class, 'detailhotel']);

Route::post('/payment', [PaymentController::class, 'payment']);
Route::get('/hoteldatacount', [HotelController::class, 'count']);
Route::get('/bookingdatacount', [BookingController::class, 'count']);
Route::put('/update/{id}',[HotelController::class, 'update']);

Route::post('/roomRegister', [RoomController::class, 'store']);
Route::post('/booking', [BookingController::class, 'store']);
Route::post('/paymentdetail', [PaymentController::class, 'store']);


