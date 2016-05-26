<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    function show($collection_id = null){
        $collections = \App\Collection::orderBy('position')->get();
        if ($collection_id) {
            $selectedCollection = \App\Collection::with('paintings')->find($collection_id);
        } else {
            $selectedCollection = \App\Collection::with('paintings')->where('is_default',1)->get()->first();
        }
        return \View::make('gallery', ['collections' => $collections, 'selectedCollection' => $selectedCollection]);
    }
}
