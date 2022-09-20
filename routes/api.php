<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/site', [SiteController::class,'index']); //muestra todos los registros
Route::post('/site', [SiteController::class,'store']); // crea un registro
Route::put('/site/{id}', [SiteController::class,'update']); // actualiza un registro
Route::delete('/site/{id}', [SiteController::class,'destroy']); //elimina un registro

Route::get('/review', [ReviewController::class,'index']); //muestra todos los registros
Route::post('/review', [ReviewController::class,'store']); // crea un registro
Route::put('/review/{id}', [ReviewController::class,'update']); // actualiza un registro
Route::delete('/review/{id}', [ReviewController::class,'destroy']); //elimina un registro

Route::get('/favorite', [FavoriteController::class,'index']); //muestra todos los registros
Route::post('/favorite', [FavoriteController::class,'store']); // crea un registro
Route::put('/favorite/{id}', [FavoriteController::class,'update']); // actualiza un registro
Route::delete('/favorite/{id}', [FavoriteController::class,'destroy']); //elimina un registro

Route::get('/subcategory', [SubcategoryController::class,'index']); //muestra todos los registros
Route::post('/subcategory', [SubcategoryController::class,'store']); // crea un registro
Route::put('/subcategory/{id}', [SubcategoryController::class,'update']); // actualiza un registro
Route::delete('/subcategory/{id}', [SubcategoryController::class,'destroy']); //elimina un registro

Route::get('/user', [UserController::class,'index']); //muestra todos los registros
Route::post('/user', [UserController::class,'store']); // crea un registro
Route::put('/user/{id}', [UserController::class,'update']); // actualiza un registro
Route::delete('/user/{id}', [UserController::class,'destroy']); //elimina un registro
