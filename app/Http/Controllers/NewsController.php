<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use Mail;
use Meta;

class NewsController extends Controller
{
    public function index() {
        Meta::set('title', 'News');
        Meta::set('image', 'http://lyssakayra.com/images/logo.jpg');
        Meta::set('url', 'http://lyssakayra.com/news');

        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('news', ['articles' => $articles]);        
    }

    public function show($article_id) {
        $article = Article::getBySlug($article_id);
        if (!$article) $article = Article::find($article_id);

        Meta::set('title', $article->title);
        Meta::set('description', $article->summary);
        Meta::set('image', 'http://lyssakayra.com'.$article->picture_url);
        Meta::set('url', 'http://lyssakayra.com/news/'.$article->slug);

        return view('news_article', ['article' => $article]);        
    }
} 

