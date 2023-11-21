<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders',[OrderController::class,'index'])->name('order.index');
Route::get('/show/{order}',[OrderController::class,'show'])->name('order.show');