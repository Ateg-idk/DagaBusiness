<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class VistaPrincipalController
{
    public function index()
    {
        return view('vistaprincipal');
    }
}


