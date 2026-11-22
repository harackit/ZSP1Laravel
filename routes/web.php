<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::get('/wersja', fn() => response()->json([
    'wersja' => Cache::get('wersja_strony', 0),
]));





