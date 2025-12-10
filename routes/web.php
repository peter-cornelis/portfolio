<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index']);
Route::post('/ai-chat', [PortfolioController::class, 'aiChat']);
Route::post('/contact', [PortfolioController::class, 'contact']);