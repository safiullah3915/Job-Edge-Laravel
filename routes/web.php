<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("web.index");
});

Route::get('/sign-in', function () {
    return view("web.sign-in");
});

Route::get('/sign-up', function () {
    return view("web.sign-up");
});


