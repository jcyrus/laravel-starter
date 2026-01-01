<?php

declare(strict_types=1);

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/terms', function () {
    return view('terms', ['terms' => file_get_contents(resource_path('markdown/terms.md'))]);
})->name('terms.show');

Route::get('/policy', function () {
    return view('policy', ['policy' => file_get_contents(resource_path('markdown/policy.md'))]);
})->name('policy.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class)->only(['index']);
    Route::resource('roles', RoleController::class)->only(['index']);
    Route::resource('activity-log', ActivityLogController::class)->only(['index']);
});
