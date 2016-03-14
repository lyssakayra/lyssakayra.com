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
                  <li class=""><a href="">previous work</a></li>
                  <li class="active"><a href="">tree rings</a></li>
                </ul>
            </div>
            <div class="top-nav">
                <ul class="">
                  <li class=""><a href="">previous work</a></li>
                  <li class="active"><a href="">tree rings</a></li>
                </ul>
            </div>
            <div class="track my-track">
              <div class="view-port">
                <div class="slider-container">
                  <div class="item"></div>
                  <div class="item item-0"><img class="" u="thumb" src="/images/gallery_sahara.jpg"></div>
                  <div class="item item-1"><img class="desaturate" u="thumb" src="/images/gallery_india.jpg"></div>
                  <div class="item item-2"><img class="desaturate" u="thumb" src="/images/gallery_white.jpg"></div>
                  <div class="item item-3"><img class="desaturate" u="thumb" src="/images/gallery_morocco.jpg"></div>
                  <div class="item item-4"><img class="desaturate" u="thumb" src="/images/gallery_berlin.jpg"></div>
                  <div class="item item-5"><img class="desaturate" u="thumb" src="/images/gallery_atlas_mountains.jpg"></div>
                  <div class="item item-6"><img class="desaturate" u="thumb" src="/images/gallery_vancouver.jpg"></div>
                </div>
              </div>
              <div class="pagination">
                <a href="#" class="prev disabled"></a>
                <a href="#" class="next disabled"></a>
              </div>
            </div>
            <div class="gallery-frame">
                <div class="item item-0 active">
                    <img src="/images/gallery_sahara.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">SAHARA</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-1">
                    <img src="/images/gallery_india.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">INDIA</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-2">
                    <img src="/images/gallery_white.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">WHITE</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-3">
                    <img src="/images/gallery_morocco.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">MOROCCO</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-4">
                    <img src="/images/gallery_berlin.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">BERLIN</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-5">
                    <img src="/images/gallery_atlas_mountains.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">ATLAS MOUNTAINS</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
                <div class="item item-6">
                    <img src="/images/gallery_vancouver.jpg">
                    <div class="gallery-frame-details">
                        <span class="gallery-details-name">VANCOUVER</span><span class="gallery-details-year">2015</span><br>
                        <span class="gallery-details-description">acrylic and resin on wood</span><br>
                        <span class="gallery-details-size"> 4' by 4'</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&#169; 2016 Lyssa Kayra</p>
        </div>
    </div>
    
 
    <script src="/assets/js/app.js"></script>


@endsection
