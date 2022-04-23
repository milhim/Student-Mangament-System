<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\StudentController;
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


//public routes
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/students',[StudentController::class,'index']);
Route::get('/students/{id}',[StudentController::class,'show']);
Route::get('/students/search/{fistname}',[StudentController::class,'search']);

//protacted routes

Route::group(['middleware'=>['auth:sanctum']],function(){

    Route::post('/logout',[AuthController::class,'logout']);

    Route::post('/students',[StudentController::class,'store']);
    Route::put('/students/{id}',[StudentController::class,'update']);
    Route::delete('/students/{id}',[StudentController::class,'destroy']);
});


