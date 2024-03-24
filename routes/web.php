<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/users', function () {
    return Inertia::render('Users');
});
Route::get('/seetings', function () {
    return Inertia::render('Seetings');
});
