<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  // Asegúrate de que esta línea esté presente
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController 
{
    // Mostrar el formulario de consulta
    public function create()
    {
        return view('instalaciones');
    }

    // Guardar la consulta
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'email' => 'required|email',
        'telefono' => 'required',
        'servicio' => 'required|in:Cámara,Controles,Componentes Extras,Intercomunicadores',
        'descripcion' => 'required',
    ]);

    // Crear el servicio y guardarlo en la base de datos
    Servicio::create([
        'nombres' => $request->nombres,
        'apellidos' => $request->apellidos,
        'email' => $request->email,
        'telefono' => $request->telefono,
        'servicio' => $request->servicio,
        'descripcion' => $request->descripcion,
    ]);

    // Redirigir con un mensaje de éxito
    return redirect()->route('instalaciones')->with('success', 'Consulta enviada correctamente');
}
}