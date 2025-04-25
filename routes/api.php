<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\CollectionPointController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profile', fn(Request $request) => $request->user());
});


Route::middleware('auth:sanctum')->get('/check-auth', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => 'Vous êtes connecté',
        'user' => $request->user()
    ]);
});

Route::get('/collection-points/import-csv', [CollectionPointController::class, 'importFromCSV']);
