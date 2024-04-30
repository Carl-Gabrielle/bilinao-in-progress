<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class decorationController extends Controller
{
    public function homeDecor(Request $request)
    {
        return view  ('decorations.home_decor');
    }
}
