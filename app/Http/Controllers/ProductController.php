<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //! questo è l'ambito del READ
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //! sempre anibito READ mostra il form per la creazione
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //!amibto CREATE riguarda le rotte di tipo post e i vari metodi che utilizziamo pe salvare i dati
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //! rotta di tipo get che serve a mostrare il dettaglio de prodotto
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //! tipo get serve a mostrare il form per la modifica del prodottoI('non influisce sul database)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //! rotta di tipo PUT serve per le varie funzioni che serviraanno per modificare un prodotto (influisce direttamente sul database)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //! servira per l'eliminazione del record
    }
}
