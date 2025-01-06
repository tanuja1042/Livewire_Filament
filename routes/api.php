<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\BrandController;

Route::get('/test', function () {
    return dd("Hello World!!");
});

// Public Routes
Route::apiResource('category', CategoryController::class);
Route::apiResource('brand', BrandController::class);
Route::apiResource('product', ProductController::class);



Route::get('/user', [AuthController::class, 'userData']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.reset');

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});


// Sanctum-protected API routes
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('permissions', PermissionController::class);

    // Role-Permission Assignment Routes
    Route::get('roles/{id}/permissions', [RoleController::class, 'permissions']);
    Route::post('roles/{id}/permissions', [RoleController::class, 'assignPermissions']);
});
