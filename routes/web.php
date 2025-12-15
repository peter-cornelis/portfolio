<?php

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'nl'])) {
        Cookie::queue('language', $locale, 525600);
    }
    return redirect()->back();
})->name('language.toggle');

Route::get('/print', function() {
    return view('print');
});