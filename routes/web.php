<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'homepage'])->name('homepage');
Route::get('/articoli/aggiungi',[ArticleController::class,'create'])->name('aggiungi');
Route::post('/articoli/aggiungi',[ArticleController::class,'store'])->name('post-articolo');
Route::get('/profilo',[UserController::class,'showProfile'])
->name('profilo')
->middleware(['auth','verified']);