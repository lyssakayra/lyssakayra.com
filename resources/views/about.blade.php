@extends('layouts.app')

@section('content')
    <div class="main-container about">
        <div class="header">
            <div class="header-container header-about">
                <div class="header-logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="/images/logo_header.png">
                    </a>

                </div>
                <p class="header-title">ABOUT</p>
            </div>
            <div class="header-top-right">
                <img src="/images/header_top_right.jpg">
            </div>
        </div>
        <div class="body-container">
            <div class="left-nav"></div>
            <div class="lyssa-pic">
                <img src="images/lyssa_about.jpg">
            </div>            
            <div class="text-title">       
                <p>LYSSA KAYRA</p>
            </div>
            <div class="text-content">
                <p>Vancouver based artist, Lyssa Kayra grew up on the remote and rugged West Coast of Vancouver Island where she developed her life-long appreciation of natural forms. Her latest series of meticulously painted tree-rings are inspired by these elements and the persistence of time and growth. The series was born and exhibited in 2015 in Barcelona, where Lyssa spent the majority of the year traveling from, documenting, and sourcing diverse locations and colours for the collection. A gifted master of colour, Lyssa creates artworks that resonate with particular places she’s traveled, often extracting the colours of a landscape or location directly from small watercolour studies or photographs she’s taken during her many trips abroad.</p>
                <p>In this collection one might recognize the rich colours of Moroccan landscapes, technicolor hues of Indian textiles, the warmth of the Sahara, or vivid graffiti neons of Berlin, all depicted as the rings of an old growth tree, allowing us a peek at their hidden beauty. Her large mandala-esque pieces are both captivating and peaceful. </p>
                <p>Lyssa studied fine arts at the Nova Scotia College of Art and Design, Halifax and the University of New South Wales in Sydney, Australia. Her work is defined by West Coast elements with environmental undertones and the international palette of her travels. She works with acrylics and resin on wood.</p>
            </div>
        </div>
        <div class="footer">
            <p>&#169; 2016 Lyssa Kayra</p>
        </div>
    </div>

    <script src="/assets/js/app.js"></script>


@endsection
