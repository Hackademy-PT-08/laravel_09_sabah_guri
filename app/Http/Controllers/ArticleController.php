<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(StoreArticleRequest $request){

        //! scrivo la vairabile che conterra il file caricato.
        //*questo l'ho fatto in un momento successivo a quello che  sta scritto dopo
        // $image=$request->file('immagine')->store('articles');
        $imageId=uniqid();
        
        $article=new Article;
        $article->title=$request->old('titolo');
        $article->content=$request->old('contenuto');
        $article->image_id=$imageId;
        $article->image='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
        $article->save();
        $fileName='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
        $image=$request->file('immagine')->storeAs('public/articles',$fileName);
        return redirect('/articoli/aggiungi');
    }
}
