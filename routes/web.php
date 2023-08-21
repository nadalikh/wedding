<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('invite/{guest:mobile}', [\App\Http\Controllers\RouteController::class, "welcome"])->missing(function (){
    return abort(404);
})->name("invite");

Route::get("admin", [\App\Http\Controllers\RouteController::class, "admin"])->middleware('auth')->name('admin');
Route::get("login", [\App\Http\Controllers\RouteController::class, "login"])->name('login');

Route::post("login", [\App\Http\Controllers\UserController::class, "login"])->name('admin.login');
Route::get("logout", [\App\Http\Controllers\UserController::class, "logout"])->name('admin.logout');
Route::post('guest', [\App\Http\Controllers\GuestController::class, 'store'])->name("guest.store")->middleware('auth');
Route::get('sendSms/{mobile}', [\App\Http\Controllers\GuestController::class, 'sendSms'])->name("guest.sendSms")->middleware("auth");
Route::get('callTrigger/{guest:mobile}', [\App\Http\Controllers\GuestController::class, 'callTrigger'])->name("guest.callTrigger")->middleware("auth");
