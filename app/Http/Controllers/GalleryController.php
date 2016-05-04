<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    function show($collection_id = null){
        $collections = \App\Collection::with('paintings')->orderBy('position', 'desc')->get();
        if ($collection_id) {
            $selectedCollection = \App\Collection::find($collection_id);
        } else {
            $selectedCollection = \App\Collection::where('is_default',1)->get()->first();
        }
        return \View::make('gallery', ['collections' => $collections, 'selectedCollection' => $selectedCollection]);
    }
}
