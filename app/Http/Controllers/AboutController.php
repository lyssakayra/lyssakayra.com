<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Meta;

class AboutController extends Controller
{
    function show() {
      Meta::set('title', 'About');
      Meta::set('og:title', 'About - Lyssa Kayra');
      Meta::set('og:image', 'http://lyssakayra.com/images/lyssa_about.jpg');
      Meta::set('og:url', 'http://lyssakayra.com/about');
      
      return view('about');
    }
}
