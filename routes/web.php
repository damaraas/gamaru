<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/Adult', function () {
    return Inertia::render('Adult/index');
});

Route::get('little-program', function () {
    return Inertia::render('Little/Index');
});
