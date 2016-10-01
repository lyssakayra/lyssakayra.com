@extends('layouts.app')

@section('content')
  
    <div class="main-container gallery">
        <div class="header">
            <div class="header-container header-gallery desaturate">
                <div class="header-logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="/images/logo_header.png">
                    </a>
                </div>
                <p class="header-title">GALLERY</p>
            </div>
            <div class="header-top-right">
                <img src="/images/header_top_right.jpg">
            </div>
        </div>
        <div class="body-container">
            <div class="left-nav">
                <ul class="rotate-left">
                    @foreach ($collections as $collection)
                        @if ($collection->id == $selectedCollection->id)
                            <li class="active"><a href="">{{ $collection->name }}</a></li>
                        @else
                            <li class=""><a href="/gallery/{{ $collection->id }}">{{ $collection->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="top-nav">
                <ul class="">
                    @foreach ($collections as $collection)
                        @if ($collection->id == $selectedCollection->id)
                            <li class="active"><a href="">{{ $collection->name }}</a></li>
                        @else
                            <li class=""><a href="/gallery/{{ $collection->id }}">{{ $collection->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="track my-track">
              <div class="view-port">
                <div class="slider-container">
                  <div class="item"></div>
                    @foreach ($selectedCollection->paintings as $painting)
                        @if ($painting->position == 0)
                            <div class="item item-{{ $painting->position }} active"><img class="" u="thumb" src="{{ $painting->url }}"></div>
                        @else
                            <div class="item item-{{ $painting->position }}"><img class="desaturate" u="thumb" src="{{ $painting->url }}"></div>
                        @endif
                    @endforeach
                </div>
              </div>
              <div class="pagination">
                <a href="#" class="prev disabled"></a>
                <a href="#" class="next disabled"></a>
              </div>
            </div>
            <div class="gallery-frame">
                @foreach ($selectedCollection->paintings as $painting)
                    @if ($painting->position == 0)
                        @include('gallery.gallery_frame', array(
                            'painting' => $painting,
                            'active' => 'active'
                        ))
                    @else
                        @include('gallery.gallery_frame', array(
                            'painting' => $painting,
                            'active' => ''
                        ))                  
                    @endif
                @endforeach
            </div>
        </div>

        <div class="footer">
            <p>&#169; 2016 Lyssa Kayra</p>
        </div>
    </div>
    
 
    <script src="/assets/js/app.js"></script>


@endsection
