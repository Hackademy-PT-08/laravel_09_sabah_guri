<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

        //!rotta di tipo get che serve a mostrare qualcosa in questo caso la homepage(READ)
Route::get('/',[HomeController::class,'homepage'])->name('homepage');



        //!rotta che serve per mostrare tutti gli articoli presenti nel database(READ)
 Route::get('/articoli',[ArticleController::class,'index'])->name('articles-index');




        //!rotta di tipo get che serve a mostrare il form per l'aggiunta degli articoli (READ)
Route::get('/articoli/aggiungi',[ArticleController::class,'create'])->name('aggiungi');





        //!rotta di tipo post che serve a creare dei nuovi articolie con post li mandiamo nel nostro database(CREATE)
Route::post('/articoli/aggiungi',[ArticleController::class,'store'])->name('post-articolo');




        //!rotte che serve per mostrae il form di modifica degli articoli
Route::get('/articoli/modifica/{id}',[ArticleController::class,'edit'])->name('edit.articles');




        
        //!rotta che serve per modificare dei record già esistenti nel database (nb. non si può aggiungere qualcosa(UPDATE)
 Route::put('/articoli/modifica/{id}',[ArticleController::class,'update'])->name('articles-update');






        //!rotta che serve per eliminare dei record(DELETE)
 Route::delete('articoli/elimina/{id}',[ArticleController::class,'destroy'])->name('articles-delete');





      //! rotta di tipo get per mostrare il profilo
Route::get('/profilo',[UserController::class,'showProfile'])
->name('profilo')
->middleware(['auth','verified']);