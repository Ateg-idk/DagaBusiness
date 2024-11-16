<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de tener el modelo Producto

abstract class Controller
{
    //
}

class InstalacionesController extends Controller
{
     // Mostrar la página inicial con todos los productos
     public function index()
     {
         $productos = Producto::all(); // Obtener todos los productos
         return view('instalaciones', compact('productos'));
     }
 
     // Filtrar productos por categorías seleccionadas
     public function filter(Request $request)
     {
         $categorias = $request->input('categorias', []); // Obtener las categorías seleccionadas
 
         // Filtrar productos por las categorías seleccionadas
         $productos = Producto::when(!empty($categorias), function ($query) use ($categorias) {
             $query->whereIn('categoria', $categorias);
         })->get();
 
         return view('instalaciones', compact('productos'));
     }
}