<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chefApiController;
use App\Http\Controllers\cakeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chef', [chefApiController::class, 'index']);
Route::post('/chef', [chefApiController::class, 'store']);
Route::patch('/chef/{id}', [chefApiController::class, 'update']);
Route::delete('/chef/{id}', [chefApiController::class, 'destroy']);

Route::get('/cake', [cakeApiController::class, 'index']);
Route::post('/cake', [cakeApiController::class, 'store']);