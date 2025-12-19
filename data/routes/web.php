<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/language/{locale}', [PortfolioController::class, 'toggleLanguage']);
Route::get('/print', [PortfolioController::class, 'printView']);
Route::get('/pdf', [PortfolioController::class, 'downloadPdf']);