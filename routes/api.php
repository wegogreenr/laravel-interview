<?php

use App\Http\Controllers\PersonajeController;
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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('personaje', [PersonajeController::class, 'getPersonajes']);
Route::post('personaje-add', [PersonajeController::class, 'addPersonajes']);
Route::post('personaje-edit', [PersonajeController::class, 'update']);



Route::get('personajes-api', [PersonajeController::class, 'getPersonajesExample']);


