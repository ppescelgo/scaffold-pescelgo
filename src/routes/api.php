<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('login', [UserController::class, 'authenticate']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('user', [UserController::class, 'get']);
});