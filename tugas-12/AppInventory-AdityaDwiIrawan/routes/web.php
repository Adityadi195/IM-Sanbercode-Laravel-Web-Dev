<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/welcome', function (Request $request) {
    return view('welcome', [
        'first' => $request->first_name,
        'last' => $request->last_name
    ]);
});

Route::get('/', [PageController::class, 'home']);
Route::get('/signup', [PageController::class, 'signup']);
