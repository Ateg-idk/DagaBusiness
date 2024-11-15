<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class MantenimientoController
{
    public function index()
    {
        return view('mantenimiento');
    }
}
