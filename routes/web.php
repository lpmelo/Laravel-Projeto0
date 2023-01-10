<?php

use Illuminate\Support\Facades\Route;

// Route::get(uri: '/users', []);

Route::get('/', function () {
    return view('welcome');
});