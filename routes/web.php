<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'nl'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');
