<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Meta;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        # Default title
        Meta::title('Lyssa Kayra');
        # Default description
        Meta::set('description', 'Vancouver based artist, Lyssa Kayra grew up on the remote and rugged West Coast of Vancouver Island where she developed her life-long appreciation of natural forms. Her latest series of meticulously painted tree-rings are inspired by these elements and the persistence of time and growth. The series was born and exhibited in 2015 in Barcelona, where Lyssa spent the majority of the year traveling from, documenting, and sourcing diverse locations and colours for the collection. A gifted master of colour, Lyssa creates artworks that resonate with particular places she’s traveled, often extracting the colours of a landscape or location directly from small watercolour studies or photographs she’s taken during her many trips abroad.');
        # Default image
        Meta::set('image', 'http://lyssakayra.com/images/logo.jpg');
        # Default robots
        Meta::set('robots', 'index,follow');
        # Default og:tags
        Meta::set('og:title', 'Lyssa Kayra');
        Meta::set('og:description', 'Vancouver based artist, Lyssa Kayra grew up on the remote and rugged West Coast of Vancouver Island where she developed her life-long appreciation of natural forms. Her latest series of meticulously painted tree-rings are inspired by these elements and the persistence of time and growth. The series was born and exhibited in 2015 in Barcelona, where Lyssa spent the majority of the year traveling from, documenting, and sourcing diverse locations and colours for the collection. A gifted master of colour, Lyssa creates artworks that resonate with particular places she’s traveled, often extracting the colours of a landscape or location directly from small watercolour studies or photographs she’s taken during her many trips abroad.');
        Meta::set('og:image', 'http://lyssakayra.com/images/logo.jpg');
        Meta::set('og:url', 'http://lyssakayra.com');
        Meta::set('og:type', 'profile');
        Meta::set('og:site_name', 'Lyssa Kayra');

    }
}
