<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('user', UserController::class);
Route::apiResource('division', DivisionController::class);
Route::apiResource('poll', PollController::class);
Route::apiResource('choice', ChoiceController::class);
Route::apiResource('vote', VoteController::class);