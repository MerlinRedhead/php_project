<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/home',[MainController::class,'home'])->name('home');

Route::get('/about',[MainController::class,'about'])->name('about');

Route::get('/logger',[MainController::class,'logger'])->name('logger');


Route::get('/password',[MainController::class,'password'])->name('password');

Route::post('/logger/check',[MainController::class,'logger_check'])->name('logger_check');

Route::get('/cabinet',[MainController::class,'cabinet'])->name('cabinet');











