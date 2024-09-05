<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PositionController;
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

Route::get('/position', [PositionController::class, 'index']);

Route::post('/position', [PositionController::class, 'store']);

Route::get('/position/{id}', [PositionController::class, 'show']);

Route::put('/position/{id}', [PositionController::class, 'update']);

Route::delete('/position/{id}', [PositionController::class, 'delete']);
