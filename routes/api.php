<?php

use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routes pour Controller
Route::resource('Client', ClientController::class);
Route::resource('Admin', AdminController::class);
Route::resource('Evenement', EvenementController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
