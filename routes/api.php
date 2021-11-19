<?php

use App\Http\Controllers\DomainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IdentitieController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TechnologieController;

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
Route::get('send-opinion',[OpinionController::class,'sendOpinion']);

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

// ---------------------Domains----------------------------

Route::get('domains',[DomainController::class,'index']);
Route::get('domain/{id}',[DomainController::class,'show']);
Route::post('domain',[DomainController::class,'store']);
Route::put('domain/{id}',[DomainController::class,'update']);
Route::delete('domain/{id}',[DomainController::class,'destroy']);

// ---------------------Projects----------------------------

Route::get('projects',[ProjectController::class,'index']);
Route::get('project/{id}',[ProjectController::class,'show']);
Route::post('project',[ProjectController::class,'store']);
Route::put('project/{id}',[ProjectController::class,'update']);
Route::delete('project/{id}',[ProjectController::class,'destroy']);


// ---------------------Technologies----------------------------

Route::get('technologies',[TechnologieController::class,'index']);
Route::get('technologie/{id}',[TechnologieController::class,'show']);
Route::post('technologie',[TechnologieController::class,'store']);
Route::put('technologie/{id}',[TechnologieController::class,'update']);
Route::delete('technologie/{id}',[TechnologieController::class,'destroy']);