<?php

use App\Http\Controllers\Web\SearchFlightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewOrder;
use App\Http\Controllers\FlightSearchController;

Route::get('/', SearchFlightController::class);

Route::get('/add-flight', function () {
    return view('Flight-booking.add-flight');
});
Route::get('/view-flight', function () {
    return view('Flight-booking.flight-booking');
});
Route::get('/order-flight', function () {
    return view('Flight-booking.flight-order');
});
Route::get('/search-flight', function () {
    return view('Flight-booking.flight-search');
});
