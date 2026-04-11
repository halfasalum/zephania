<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\management\ExpertsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/menus', [FrontendController::class, 'menus']);
Route::get('/welcome-note', [FrontendController::class, 'welcome_note']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/service/{service_id}', [FrontendController::class, 'service_detail']);
Route::get('/testimonials', [FrontendController::class, 'testimonials']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/news/all', [FrontendController::class, 'news_all']);
Route::get('/news/{news_id}', [FrontendController::class, 'news_detail']);
Route::get('/stats', [FrontendController::class, 'page_stats']);
Route::get('/experts', [ExpertsController::class, 'list']);
Route::get('/why-us', [FrontendController::class, 'whyUs']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/general', [FrontendController::class, 'generalIfo']);
