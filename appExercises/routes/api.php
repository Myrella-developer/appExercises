<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ExercisesController;
use Illuminate\Support\Facades\Route;


Route::get('/user', function () {
    return 'Información del usuario (sin autenticación)';
});


Route::prefix('appExercises')->group(function() {


    Route::post('/user', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);


    Route::post('/exercises', [ExercisesController::class, 'store']);
    Route::get('/exercises', [ExercisesController::class, 'index']);
    Route::post('/exercises/{id}/join', [ExercisesController::class, 'joinExercises']);

    Route::get('/exercises/export', [ExercisesController::class, 'export']);
    Route::post('/exercises/import', [ExercisesController::class, 'import']);
});
