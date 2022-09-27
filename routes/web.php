<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurdTwoController;
use App\Http\Controllers\UserController;
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



Route::get('/',[CategoryController::class,'index'] );
Route::get('/category-create',[CategoryController::class,'create'] );

Route::post('/category-store',[CategoryController::class,'store'] );

Route::get('/category-edit/{id}',[CategoryController::class,'edit'] );

Route::put('/category-update/{id}',[CategoryController::class,'update'] );

Route::get('/category-delete/{id}',[CategoryController::class,'delete'] );



Route::get('users',[UserController::class,'index']);


//crud 2

Route::get('/list',[CurdTwoController::class,'list']);

Route::get('/input_fild',[CurdTwoController::class,'input_fild']);


//inser data

Route::post('/insertdata',[CurdTwoController::class,'insertdata']);
//list edit page

Route::get('/listedit/{id}',[CurdTwoController::class,'listedit']);

//update list

Route::put('/updatelist/{id}',[CurdTwoController::class,'updatelist']);

//delete list

Route::get('/deletelist/{id}',[CurdTwoController::class,'deletelist']);


