<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/user', [UserController::class,'users']);
    Route::post('/logout',[UserController::class,'logout']);
    Route::apiResource('/ticket',TicketController::class);
});

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);