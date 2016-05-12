@extends('layouts.app')

@section('content')
    <div class="main-container news">
        <div class="header">
            <div class="header-container header-news">
                <div class="header-logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="/images/logo_header.png">
                    </a>

                </div>
                <p class="header-title">NEWS</p>
            </div>
            <div class="header-top-right">
                <img src="/images/header_top_right.jpg">
            </div>
        </div>
        <div class="body-container">
            <!-- <div class="left-nav"></div> -->
            <div class="articles">
                    <div class="article">
                        <img class="article-picture" src="{{ $article->picture_url }}">
                        <h2> {{ $article->title }}</h2>
                        {!! $article->body !!}
                    </div>
            </div>
        </div>
        <div class="footer">
            <p>&#169; 2016 Lyssa Kayra</p>
        </div>
    </div>
    <script src="/assets/js/app.js"></script>


@endsection
