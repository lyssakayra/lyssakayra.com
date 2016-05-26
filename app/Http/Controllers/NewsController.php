<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use Mail;

class NewsController extends Controller
{
    public function index() {
        $articles = Article::all();
        return \View::make('news', ['articles' => $articles]);        
    }

    public function show($article_id) {
        $article = Article::find($article_id);
        return \View::make('news_article', ['article' => $article]);        
    }
} 
