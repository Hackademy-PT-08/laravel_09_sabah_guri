<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $article=new Article;
        $article->title=$request->titolo;
        $article->content=$request->contenuto;
        $article->save();
        return redirect('/articoli/aggiungi');
    }
}
