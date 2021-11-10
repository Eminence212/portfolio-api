<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IdentitieController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SkillController;


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

Route::get('opinions',[OpinionController::class,'index']);
Route::get('opinion/{id}',[OpinionController::class,'show']);
Route::post('opinion',[OpinionController::class,'store']);
Route::put('opinion/{id}',[OpinionController::class,'update']);
Route::delete('opinion/{id}',[OpinionController::class,'destroy']);

// ---------------------Skills Types----------------------------

Route::get('types',[TypeController::class,'index']);
Route::get('type/{id}',[TypeController::class,'show']);
Route::post('type',[TypeController::class,'store']);
Route::put('type/{id}',[TypeController::class,'update']);
Route::delete('type/{id}',[TypeController::class,'destroy']);

// ---------------------Skills----------------------------

Route::get('skills',[SkillController::class,'index']);
Route::get('skill/{id}',[SkillController::class,'show']);
Route::post('skill',[SkillController::class,'store']);
Route::put('skill/{id}',[SkillController::class,'update']);
Route::delete('skill/{id}',[SkillController::class,'destroy']);