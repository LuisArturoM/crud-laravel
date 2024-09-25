<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [MasterController::class, 'index']);
Route::resource('/', MasterController::class);  
Route::resource('/usuarios', UsersController::class);
Route::get('/Registro', [RegisterController::class, 'index'],);
Route::post('/Registro', [RegisterController::class, 'store'],);