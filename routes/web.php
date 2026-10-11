<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::post('/wyloguj', [LoginController::class, 'wyloguj'])->name('wyloguj');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function() {

    Route::get('/admin-panel', function () {
        return view('admin-panel');
    })->name('admin-panel');

});



