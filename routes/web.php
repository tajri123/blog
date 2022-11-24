<?php

use App\Http\Controllers\KontenController;
use App\Models\konten;
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



Route::get('/', function () {
    return view('content',[
        'konten'=> []
    ]);
});

// ROUTING CRUD KONTEN
Route::get('/crud/index',[KontenController::class,'index'])->name('crud,index');
Route::get('/crud/index',[KontenController::class,'create'])->name('crud,create');
Route::get('/crud/index',[KontenController::class,'store'])->name('crud,store');
Route::get('/crud/index',[KontenController::class,'edit'])->name('crud,edit');
Route::get('/crud/index',[KontenController::class,'update'])->name('crud,update');
Route::get('/crud/index',[KontenController::class,'delete'])->name('crud,delete');