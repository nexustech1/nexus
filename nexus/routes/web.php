<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [TestController::class, 'test'])->name('test');

Route::post('/site', function () {
    return view('site'); 
});
