<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::group(['middleware'=>'guest'],function(){
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::post('/',[AuthController::class,'registerpost'])->name('registe');
});
