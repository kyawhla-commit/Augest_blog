<?php

use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return  "Route A";
});

Route::get('/b', function () {
    return "Route B";
});

Route::get('/', function () {
    return view('welcome');
});
