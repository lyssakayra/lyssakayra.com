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
        Meta::set('og:title', 'News - Lyssa Kayra');
        Meta::set('og:url', 'http://lyssakayra.com/news');
        Meta::set('og:type', 'article');
        Meta::set('image', 'http://lyssakayra.com/images/logo.jpg');

        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('news', ['articles' => $articles]);        
    }

    public function show($article_id) {
        $article = Article::getBySlug($article_id);
        if (!$article) $article = Article::find($article_id);

        Meta::set('title', $article->title);
        Meta::set('description', $article->summary);
        Meta::set('og:title', $article->title);
        Meta::set('image', 'http://lyssakayra.com'.$article->picture_url);
        Meta::set('og:url', 'http://lyssakayra.com/news/'.$article->slug);
        Meta::set('og:type', 'article');

        return view('news_article', ['article' => $article]);        
    }
} 

