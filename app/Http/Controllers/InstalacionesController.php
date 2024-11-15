<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class InstalacionesController
{
    public function index()
    {
        return view('instalaciones');
    }
}
