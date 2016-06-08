<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Meta;

class GalleryController extends Controller
{
    function show($collection_id = null){
        Meta::set('title', 'Gallery');
        Meta::set('og:title', 'Gallery - Lyssa Kayra');
        Meta::set('image', 'http://lyssakayra.com/images/logo.jpg');
        Meta::set('og:url', 'http://lyssakayra.com/gallery');

        $collections = \App\Collection::orderBy('position')->get();
        if ($collection_id) {
            $selectedCollection = \App\Collection::with('paintings')->find($collection_id);
        } else {
            $selectedCollection = \App\Collection::with('paintings')->where('is_default',1)->get()->first();
        }
        return view('gallery', ['collections' => $collections, 'selectedCollection' => $selectedCollection]);
    }
}
