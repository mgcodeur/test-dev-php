<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dashboard\DashboardIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('', DashboardIndexController::class)->name('index');
    });

require __DIR__.'/web/auth.php';
