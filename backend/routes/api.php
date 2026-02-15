<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\management\ExpertsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/menus', [FrontendController::class, 'menus']);
Route::get('/welcome-note', [FrontendController::class, 'welcome_note']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/testimonials', [FrontendController::class, 'testimonials']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/stats', [FrontendController::class, 'page_stats']);
Route::get('/experts', [ExpertsController::class, 'list']);
Route::get('/why-us', [FrontendController::class, 'whyUs']);
