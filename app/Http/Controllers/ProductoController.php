<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController 
{
    // Mostrar productos en la vista
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('instalaciones', compact('productos')); // Pasar los productos a la vista
    }

    // Mostrar formulario para crear un producto
    public function create()
    {
        return view('instalaciones.create'); // Vista para crear un producto
    }

    // Guardar nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validar imagen
            'filtro' => 'required|string',
        ]);

        // Subir imagen
        $imageName = time().'.'.$request->imagen->extension();
        $request->imagen->move(public_path('imagenes'), $imageName);

        // Crear el producto
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => 'imagenes/'.$imageName, // Aquí se guarda la ruta relativa
            'filtro' => $request->filtro,
        ]);

        return redirect()->route('instalaciones.index')->with('success', 'Producto creado con éxito');
    }
}
