<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //give all the jobs attached to the tag transmitted
        return view('results', ['jobs' => $tag->jobs ]);
    }
}
