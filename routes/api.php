<?php

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

Route::post('addUser', [\App\Http\Controllers\UserController::class, "addUser"]);
Route::post('changePassword/{user}', [\App\Http\Controllers\UserController::class, "changePassword"]);
Route::post('makeTheGod', [\App\Http\Controllers\UserController::class, "makeTheGod"]);

