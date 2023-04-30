<?php

use App\Http\Controllers\Api\TareaController;
use App\Http\Controllers\Api\UsuarioController;
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
Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');
});

Route::controller(TareaController::class)->group(function(){
    Route::get('/tareas', 'index');
    Route::post('/tarea', 'store');
    Route::get('/tarea/{id}', 'show');
    Route::put('/tarea/{id}', 'update');
    Route::delete('/tarea/{id}', 'destroy');
});
