<?php

use App\Http\Controllers\todoContoller;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
Route::get('/', [todoContoller::class,'index'])->name("home");

Route::get('/create', function () {
    return view('create');
})->name("create");

Route::get('/update/{id}',[todoContoller::class,'update'])->name("update");

Route::post('/update',[todoContoller::class,('updateData')])->name("updateData");

Route::post('/create',[todoContoller::class,('store')])->name("store");

Route::get('/delete/{id}',[todoContoller::class,'delete'])->name("delete");
