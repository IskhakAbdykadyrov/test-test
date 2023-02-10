<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class GalleryController extends Controller
{
    public function gallery()
    {
        $states = \App\Models\State::all();
        return view('gallery', compact('states'));
    }
}
