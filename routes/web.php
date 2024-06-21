<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[studentController::class,'index']);
Route::get('/add',[studentController::class,'form']);
Route::POST('/adddata',[studentController::class,'add']);
Route::get('/student/{id}/edit',[studentController::class,'edit']);
Route::PUT('/student/{id}/update',[studentController::class,'update']);
Route::delete('/student/{id}/delete',[studentController::class,'delete_id']);



