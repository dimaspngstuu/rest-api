<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;

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

