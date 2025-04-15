<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site');
});

Route::get('/site', [TestController::class, 'test'])->name('test');
Route::get('/login', [loginController::class, 'login'])->name('login');