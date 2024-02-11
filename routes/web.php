<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'just_some_data']);
Route::get('/delete_data/{id}',[HomeController::class,'delete_me']);
Route::post('/add_product',[HomeController::class,'add_product']);
Route::get('/show_data',[HomeController::class,'show_data']);
Route::get('/delete_data/{id}',[HomeController::class,'delete_me']);
Route::get('/edit_data/{id}',[HomeController::class,'edit_the_data']);
Route::post('/update_product/{id}',[HomeController::class,'finally_actual_update']);