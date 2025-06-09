<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function mostrarUsuario($id)
    {
        // Simulamos obtener usuario de base de datos
        $usuario = [
            'id' => $id,
            'nombre' => "Usuario $id",
            'email' => "usuario$id@example.com"
        ];
        
        return view('usuario', compact('usuario'));
    }

    public function buscar(Request $request)
    {
        $termino = $request->input('q', '');
        
        // Simulamos resultados de búsqueda
        $resultados = [
            "Resultado 1 para $termino",
            "Resultado 2 para $termino",
            "Resultado 3 para $termino"
        ];
        
        return view('busqueda', [
            'termino' => $termino,
            'resultados' => $resultados
        ]);
    }
}