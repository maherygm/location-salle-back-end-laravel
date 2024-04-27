<?php

use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Routes pour AdminController
Route::get("Admin", [AdminController::class, "getAll"]);
Route::post("Admin", [AdminController::class, "add"]);
Route::get("Admin/{admin}", [AdminController::class, "getOne"]);
Route::put("Admin/{admin}", [AdminController::class, "edit"]);
Route::delete("Admin/{admin}", [AdminController::class, "delete"]);

// Routes pour ClientController
Route::get("Client", [ClientController::class, "getAll"]);
Route::post("Client", [ClientController::class, "add"]);
Route::get("Client/{client}", [ClientController::class, "getOne"]);
Route::put("Client/{client}", [ClientController::class, "edit"]);
Route::delete("Client/{client}", [ClientController::class, "delete"]);

//evenement Route
Route::get("Evenement", [EvenementController::class, "getAll"]);
Route::get("Evenement/{evenement}", [EvenementController::class, "getOne"]);
Route::post("Evenement", [EvenementController::class, "add"]);
Route::put('Evenement/{evenement}', [EvenementController::class, "edit"]);
Route::delete("Evenement/{evenement}", [EvenementController::class, "delete"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
