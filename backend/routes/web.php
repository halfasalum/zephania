<?php

use App\Http\Controllers\authentication\AuthController;
use App\Http\Controllers\authentication\PasswordResetController;
use App\Http\Controllers\management\DashboardController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Management\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');;
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');;

Route::prefix("authentication")->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('password/reset', [PasswordResetController::class, 'showRequestForm']);
    Route::post('password/email', [PasswordResetController::class, 'sendResetLink']);
    Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm']);
    Route::post('password/reset', [PasswordResetController::class, 'reset']);
});

Route::prefix('management')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    Route::patch('/users/{user}/activate', [UserController::class, 'activate'])->name('users.activate');
    Route::patch('/users/{user}/deactivate', [UserController::class, 'deactivate'])->name('users.deactivate');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware(['auth', 'role:admin,publisher,previewer'])->group(function () {
    Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
});
Route::middleware(['auth', 'role:admin,publisher'])->group(function () {

    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');

    Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

Route::patch('/menus/{menu}/activate', [MenuController::class, 'activate'])->name('menus.activate');
    Route::patch('/menus/{menu}/deactivate', [MenuController::class, 'deactivate'])->name('menus.deactivate');
});



