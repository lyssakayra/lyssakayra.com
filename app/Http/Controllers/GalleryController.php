<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Meta;

class GalleryController extends Controller
{
    function show($collection_id = null){
        Meta::set('title', 'Gallery');
        Meta::set('image', 'https://lyssakayra.com/images/logo.jpg');

        $collections = \App\Collection::orderBy('position')->get();
        if ($collection_id) {
            $selectedCollection = \App\Collection::with('paintings')->find($collection_id);
        } else {
            $selectedCollection = \App\Collection::with('paintings')->where('is_default',1)->get()->first();
        }
        return view('gallery', ['collections' => $collections, 'selectedCollection' => $selectedCollection]);
    }
}
