<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage() {
$getAllArticles=Article::all();

        return view('welcome',['articles'=>$getAllArticles]);
    }
}
