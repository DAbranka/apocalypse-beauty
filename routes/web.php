<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', './pages/welcome');
Route::view('/login', './pages/login');
