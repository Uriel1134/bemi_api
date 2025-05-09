<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RewardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard/old', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('/reward', [RewardController::class, 'index'])->name('dashboard.rewards.index');
Route::get('/reward/add', [RewardController::class, 'create'])->name('dashboard.rewards.create');
Route::post('/reward/add', [RewardController::class, 'store'])->name('dashboard.rewards.store');
