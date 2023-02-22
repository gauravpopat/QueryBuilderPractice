<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::post('/',[HomeController::class,'create'])->name('create');

Route::get('/editform/{id?}',[HomeController::class,'editform'])->name('editform');
Route::post('update/{id?}',[HomeController::class,'update'])->name('update');

Route::get('/delete/{id?}',[HomeController::class,'delete'])->name('delete');