<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function Home(){
        return view('home');
    }

    function index(){

        $articles = Article::paginate(4);
        return view('articles', [
            'articles' => $articles
        ]);


    }

    public function show(Article $article)
    {

        return view('article', [
            'article' => $article

        ]);

    }


}
