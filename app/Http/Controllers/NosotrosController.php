<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class NosotrosController
{
    public function index()
    {
        return view('nosotros');
    }
}
