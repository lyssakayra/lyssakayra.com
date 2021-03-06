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
        # Default
        Meta::title('Lyssa Kayra');
        Meta::set('description', 'Vancouver based artist, Lyssa Kayra grew up on the remote and rugged West Coast of Vancouver Island where she developed her life-long appreciation of natural forms. Her latest series of meticulously painted tree-rings are inspired by these elements and the persistence of time and growth. The series was born and exhibited in 2015 in Barcelona, where Lyssa spent the majority of the year traveling from, documenting, and sourcing diverse locations and colours for the collection. A gifted master of colour, Lyssa creates artworks that resonate with particular places she’s traveled, often extracting the colours of a landscape or location directly from small watercolour studies or photographs she’s taken during her many trips abroad.');
        Meta::set('url', 'https://lyssakayra.com');
        Meta::set('site_name', 'lyssakayra.com');
        Meta::set('title', 'Lyssa Kayra');
        # Default robots
        Meta::set('robots', 'index,follow');
    }
}
