<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CallLogController;
use App\Http\Controllers\QueryBotController;
use App\Http\Controllers\AgentPerformanceController;
use App\Http\Controllers\TargetAchievementController;


Route::middleware(['auth:sanctum',"throttle:60,1"])->group(function () {
    Route::post('/query-bot', [QueryBotController::class, 'handleQuery']);
    Route::get('/call-logs', [CallLogController::class, 'index']);
    Route::get('/agent-performance', [AgentPerformanceController::class, 'index']);
    Route::get('/targets-achievements', [TargetAchievementController::class, 'index']);

});



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
