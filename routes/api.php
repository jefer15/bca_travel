<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/category', [CategoryController::class,'index']); //muestra todos los registros
Route::post('/category', [CategoryController::class,'store']); // crea un registro
Route::put('/category/{id}', [CategoryController::class,'update']); // actualiza un registro
Route::delete('/category/{id}', [CategoryController::class,'destroy']); //elimina un registro
