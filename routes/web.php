<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('little-program', function () {
    return Inertia::render('Little/Index');
});

Route::get('/program-teens', function () {
    return Inertia::render('Little/ProgramTeens');
});

Route::get('/global-program', function () {
    return Inertia::render('Global/Index');
});