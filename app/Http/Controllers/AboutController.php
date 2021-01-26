<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Meta;

class AboutController extends Controller
{
    function show() {
      Meta::set('title', 'About');
      Meta::set('image', 'https://lyssakayra.com/images/lyssa_about.jpg');
      Meta::set('url', 'https://lyssakayra.com/about');

      return view('about');
    }
}
