<?php

use App\Http\Controllers\EstablishmentsController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('establishments',[EstablishmentsController::class, 'index']);

    
    Route::get('/user', function (Request $request): Authenticatable|null{
        return Auth::user();
    });
    // return $request->user();
});

Route::post('login',[LoginController::class, 'login']);
