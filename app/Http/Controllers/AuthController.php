<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario; // Importar el modelo Usuario

abstract class Controller
{
    //
}

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('principal')->withErrors($validator);
        }
    
        $credentials = $request->only('email', 'password');
        $user = Usuario::where('correoUsuario', $credentials['email'])->first();
    
        if ($user) {
            if ($credentials['password'] === $user->passwordUsuario) {
                Auth::loginUsingId($user->idUsuario);
                session(['nombre' => $user->nombre, 'imagen' => $user->imagen]);
                return redirect()->route('dashboard2');
            } else {
                return redirect()->route('principal')->withErrors(['message' => 'Datos incorrectos']);
            }
        } else {
            return redirect()->route('principal')->withErrors(['message' => 'Datos incorrectos']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('principal');
    }
}