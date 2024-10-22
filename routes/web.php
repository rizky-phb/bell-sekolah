<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ScheduleController;

Route::get('/schedules', [ScheduleController::class, 'index']);
use App\Http\Controllers\PushNotificationController;

Route::get('/generate-keys', [PushNotificationController::class, 'generateVapidKeys']);
