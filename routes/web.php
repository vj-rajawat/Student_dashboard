<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[studcontroller::class,'index']);


Route::get('/all-students',[studcontroller::class,'fetch']);

Route::get('/add-data',[studcontroller::class,'create']);
Route::post('/add-data',[studcontroller::class,'store']);

Route::get('/edit/{id}',[studcontroller::class,'edit']);
Route::post('/edit/{id}',[studcontroller::class,'update']);

Route::get('/delete-data/{id}',[studcontroller::class,'destroy']);

