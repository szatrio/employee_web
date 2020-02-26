<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WebController extends Controller
{
   public function index(){        
        $article = Article::all();
      //   dd($article);
        return view('article/index',['article' => $article]);
   }
}
