<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders',[OrderController::class,'index'])->name('order.index');
Route::get('/show/{order}',[OrderController::class,'show'])->name('order.show');
Route::post('token',[PaymentController::class,'token'])->name('token');