<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

use App\Http\Controllers\ScheduleController;

Route::get('/schedules', [ScheduleController::class, 'index']);
use App\Http\Controllers\PushNotificationController;

Route::get('/generate-keys', [PushNotificationController::class, 'generateVapidKeys']);;

use App\Http\Controllers\CobaController;

//Route::get('/',[CobaController::class, 'index'])->name('index');
// Definisikan route untuk masing-masing page
Route::get('/index', [CobaController::class, 'index'])->name('template');
Route::get('/gallery', [CobaController::class, 'gallery'])->name('gallery');
Route::get('/portfolio', [CobaController::class, 'portfolio'])->name('portfolio');
Route::get('/full-width', [CobaController::class, 'fullWidth'])->name('full-width');
Route::get('/sidebar-left', [CobaController::class, 'sidebarLeft'])->name('sidebar-left');
Route::get('/sidebar-left-2', [CobaController::class, 'sidebarLeft2'])->name('sidebar-left-2');
Route::get('/sidebar-right', [CobaController::class, 'sidebarRight'])->name('sidebar-right');
Route::get('/sidebar-right-2', [CobaController::class, 'sidebarRight2'])->name('sidebar-right-2');
Route::get('/basic-grid', [CobaController::class, 'basicGrid'])->name('basic-grid');
