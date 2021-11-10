<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IdentitieController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// ---------------------Identities----------------------------
Route::get('identities',[IdentitieController::class,'index']);
Route::get('identitie/{id}',[IdentitieController::class,'show']);
Route::post('identitie',[IdentitieController::class,'store']);
Route::put('identitie/{id}',[IdentitieController::class,'update']);
Route::delete('identitie/{id}',[IdentitieController::class,'destroy']);

// ---------------------Services----------------------------
Route::get('services',[ServiceController::class,'index']);
Route::get('service/{id}',[ServiceController::class,'show']);
Route::post('service',[ServiceController::class,'store']);
Route::put('service/{id}',[ServiceController::class,'update']);
Route::delete('service/{id}',[ServiceController::class,'destroy']);

// ---------------------Opignion----------------------------