<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Meta;

class AboutController extends Controller
{
    function show() {
      Meta::set('title', 'About');
      Meta::set('image', 'http://lyssakayra.com/images/lyssa_about.jpg');

      return view('about');
    }
}
