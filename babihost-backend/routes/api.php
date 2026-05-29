<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PropertyController;

Route::apiResource('properties', PropertyController::class);