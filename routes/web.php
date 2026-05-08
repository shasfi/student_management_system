<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[StudentController::class,'index']);
Route::get('/add-student',[StudentController::class,'create']);
Route::post('/store-student',[StudentController::class,'store']);
Route::get('/edit-student/{id}',[StudentController::class,'edit']);
Route::post('/update-student/{id}',[StudentController::class,'update']);
Route::get('/delete-student/{id}',[StudentController::class,'delete']);
