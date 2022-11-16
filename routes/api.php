<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\MahaSiswaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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


//Method Get
Route::get('/animals' ,[AnimalsController::class,'index'] );

//Method post
Route::post('/animals',[AnimalsController::class,'store']);

//Method put
Route::put('/animals/{id}',[AnimalsController::class,'update']);
 

//method delete
Route::delete('/animals',[AnimalsController::class]);



//route student

Route::get('/student',[StudentController::class,'index']);

Route::post('/student',[StudentController::class,'store']);

Route::get('student/{id}',[StudentController::class,'show']);

Route::put('/student/{id}',[StudentController::class,'update']);

Route::delete('/student/{id}',[StudentController::class,'destroy']);



//Register and Login
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);




