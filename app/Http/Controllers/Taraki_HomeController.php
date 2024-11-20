<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Taraki_HomeController extends Controller
{
    public function show()
    {
        return view('Taraki_Home');
    }
}
