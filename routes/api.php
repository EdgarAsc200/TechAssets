<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\authcontroller;


Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('devices', DeviceController::class);
});

Route::post('login', [authcontroller::class, 'login']);
