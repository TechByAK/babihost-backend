<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\BookingController;

Route::apiResource('properties', PropertyController::class);
Route::apiResource('bookings', BookingController::class);