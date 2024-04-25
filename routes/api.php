<?php

use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\LivreControlller;
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

//evenement Route
Route::get("Evenement", [EvenementController::class, "getAll"]);
Route::get("Evenement/{evenement}", [EvenementController::class, "getOne"]);
Route::post("Evenement", [EvenementController::class, "add"]);
Route::put('Evenement/{evenement}', [EvenementController::class, "edit"]);
Route::delete("Evenement/{evenement}", [EvenementController::class, "delete"]);


Route::get("Livre", [LivreControlller::class, "index"]);
Route::post("Livre", [LivreControlller::class, "add"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
