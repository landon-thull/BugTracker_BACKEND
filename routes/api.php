<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/projects', [ProjectController::class, 'index']);

Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/projects/{id}', [ProjectController::class, 'show']);

Route::put('/projects/{id}', [ProjectController::class, 'update']);

Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/projects/search/{name}', [ProjectController::class, 'search']);
