<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('hello/{name}', function ($name) {
    return 'hello ' . $name;
});

Route::post('hello-post/{name}', [HelloWorldController::class, 'hello']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});