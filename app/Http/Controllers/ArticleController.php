<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        //! questo è l'ambito del READ

        return view('articles.index',['articles'=>$articles]);
    }



    public function create(){
        return view('articles.create');
    }






    public function store(StoreArticleRequest $request){

        //! scrivo la vairabile che conterra il file caricato.
        //*questo l'ho fatto in un momento successivo a quello che  sta scritto dopo
        // $image=$request->file('immagine')->store('articles');
        $imageId=uniqid();
        
        $article=new Article;
        $article->title=$request->titolo;
        $article->content=$request->contenuto;
       if($request->file('immagine')){
        $article->image_id=$imageId;
        $article->image='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
        $fileName='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
        $image=$request->file('immagine')->storeAs('public/articles',$fileName);
       }else{
        $article->image='';
        $article->imageId='';
       }
        $article->save();
        
        return redirect('/');
    }




    public function edit($id)
    {
        //! tipo get serve a mostrare il form per la modifica del prodottoI('non influisce sul database)
      $article=Article::find($id);

      return view('articles.edit',['article'=>$article]);
    }


    public function update(Request $request,$id){
        //!funzione che effettivamente aggiorna nel databese l'articolo

        $article=Article::find($id);
        $article->title=$request->titolo;
        $article->content=$request->contenuto;
        if($request->file('immagine')){

            if ($article->image_id!== "") {

                $imageId=$article->image_id;

                
            } else {
                $imageId=uniqid();
            }
            

            $article->image_id=$imageId;
            $article->image='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
            $fileName='image-article-'. $imageId .'.'. $request->file('immagine')->extension();
            $image=$request->file('immagine')->storeAs('public/articles',$fileName);
           }

        $article->save();
        
        return redirect()->route('edit.articles',$id);

    }

    public function destroy($id){
        $article=Article::find($id);
        $article->delete();
        return redirect()->route('articles-index');
    }


}
