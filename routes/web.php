<?php

use Illuminate\Support\Facades\Route;
//try
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/test', function () {
    return view('partials.header');
});
