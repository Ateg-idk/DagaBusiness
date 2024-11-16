<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mantenimiento;

abstract class Controller
{
    //
}

class MantenimientoController
{
    // Mostrar productos en la vista
    public function index()
    {
        $mantenimientos = Mantenimiento::all(); // Obtener todos los registros de la tabla mantenimiento
        return view('mantenimiento', compact('mantenimientos')); // Pasar los datos a la vista
    }

    // Mostrar formulario para crear un nuevo registro
    public function create()
    {
        return view('mantenimiento.create'); // Vista para crear un registro
    }

    // Guardar un nuevo registro
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

        // Crear el registro en la tabla mantenimiento
        Mantenimiento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => 'imagenes/'.$imageName, // Ruta relativa de la imagen
            'filtro' => $request->filtro,
        ]);

        return redirect()->route('mantenimiento.index')->with('success', 'Registro creado con éxito');
    }
}
