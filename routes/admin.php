<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['auth', 'verified'])->group(function () {
    // Admin Dashboard
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // This will be the home route for the admin panel
    Route::get('/home', [DashboardController::class, 'index'])->name('admin.home');
    
    // Add more admin routes here as needed
});
