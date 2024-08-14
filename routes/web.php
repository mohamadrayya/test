<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrodactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/login', [AdminController::class, 'login_check'])->name('login_check');
Route::get('/log',[AdminController::class,'log'])->name('log');
