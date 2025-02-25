<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('https://' . env('SANCTUM_STATEFUL_DOMAINS'));
});

// Route::fallback(function () {
//     return view('welcome');
// });