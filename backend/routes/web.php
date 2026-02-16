<?php

use App\Http\Controllers\authentication\AuthController;
use App\Http\Controllers\authentication\PasswordResetController;
use App\Http\Controllers\management\AboutUsController;
use App\Http\Controllers\management\DashboardController;
use App\Http\Controllers\management\ExpertsController;
use App\Http\Controllers\management\GeneralInfoControler;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Management\MenuController;
use App\Http\Controllers\management\NewsController;
use App\Http\Controllers\management\PageStatsController;
use App\Http\Controllers\management\ServiceController;
use App\Http\Controllers\Management\WelcomeNoteController;
use App\Http\Controllers\management\WhyUsController;
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
    Route::get('/experts', [ExpertsController::class, 'index'])->name('experts.index');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
});

Route::middleware(['auth', 'role:admin,publisher'])->group(function () {

    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');

    Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

    Route::patch('/menus/{menu}/activate', [MenuController::class, 'activate'])->name('menus.activate');
    Route::patch('/menus/{menu}/deactivate', [MenuController::class, 'deactivate'])->name('menus.deactivate');

    Route::get('/element/welcome-note', [WelcomeNoteController::class, 'create'])->name('welcome-note.create');
    Route::post('/element/welcome-note', [WelcomeNoteController::class, 'store'])->name('welcome-note.store');

    Route::get('/element/why-us', [WhyUsController::class, 'create'])->name('why.index');
    Route::post('/element/why-us', [WhyUsController::class, 'store'])->name('why.store');

    Route::get('/element/about-us', [AboutUsController::class, 'create'])->name('about.index');
    Route::post('/element/about-us', [AboutUsController::class, 'store'])->name('about.store');

    Route::get('/element/general', [GeneralInfoControler::class, 'create'])->name('general.index');
    Route::post('/element/general', [GeneralInfoControler::class, 'store'])->name('general.store');

    Route::get("/services/create", [ServiceController::class, 'create'])->name('services.create');
    Route::post("/services", [ServiceController::class, 'store'])->name('services.store');

    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');

    Route::patch('/services/{service}/activate', [ServiceController::class, 'activate'])->name('services.activate');
    Route::patch('/services/{service}/deactivate', [ServiceController::class, 'deactivate'])->name('services.deactivate');

    Route::get("/news/create", [NewsController::class, 'create'])->name('news.create');
    Route::post("/news", [NewsController::class, 'store'])->name('news.store');


    Route::patch('/news/{news}/activate', [NewsController::class, 'activate'])->name('news.activate');
    Route::patch('/news/{news}/deactivate', [NewsController::class, 'deactivate'])->name('news.deactivate');


    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');

    Route::get('/element/stats', [PageStatsController::class, 'create'])->name('stats.create');
    Route::post('/element/stats', [PageStatsController::class, 'store'])->name('stats.store');

    Route::get('/experts/create', [ExpertsController::class, 'create'])->name('experts.create');
    Route::post('/experts', [ExpertsController::class, 'store'])->name('experts.store');

    Route::get('/experts/{expert}/edit', [ExpertsController::class, 'edit'])->name('expert.edit');
    Route::put('/experts/{expert}', [ExpertsController::class, 'update'])->name('expert.update');

    Route::patch('/experts/{menu}/activate', [ExpertsController::class, 'activate'])->name('experts.activate');
    Route::patch('/experts/{menu}/deactivate', [ExpertsController::class, 'deactivate'])->name('experts.deactivate');
});
