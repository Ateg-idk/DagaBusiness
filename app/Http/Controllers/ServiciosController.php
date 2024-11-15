<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class ServiciosController
{
    public function index()
    {
        return view('servicios');
    }
}
