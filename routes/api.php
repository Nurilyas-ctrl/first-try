<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function(){
    return 'Halo dari Nurilyas';
});

Route::get('/info', function (){
    return response()->json([
        'app' => 'Task Api',
        'version' => '1.0',
        'author' => 'Nurilyas',
    ]);
});

Route::get('/task', [TaskController::class, 'index']);

Route::post('/task', [TaskController::class, 'store']);

route::get('/task/{id}', [TaskController::class, 'show']);

route::put('/task/{id}', [TaskController::class, 'update']);

route::patch('/task/{id}', [TaskController::class, 'update']);

route::delete('/task/{id}', [TaskController::class, 'destroy']);