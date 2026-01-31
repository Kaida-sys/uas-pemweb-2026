<?php

namespace App\Http\Controllers;

use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'hero' => Hero::active()->first(),
        ]);
    }
}
