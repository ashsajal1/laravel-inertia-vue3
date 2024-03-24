<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        "name" => "Sajal",
        "framework" => ['Larvel', 'Vue', 'Inertia']
    ]);
});
