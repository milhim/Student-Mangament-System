<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[App\Http\Controllers\StudentController::class, 'index'])->name('home');
Route::get('/edit/{id}',[App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
Route::get('/show/{id}',[App\Http\Controllers\StudentController::class, 'show']);
Route::get('/create',[App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::post('/store',[App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::post('/update/{id}',[App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[App\Http\Controllers\StudentController::class, 'destroy'])->name('delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
