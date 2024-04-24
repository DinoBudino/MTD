<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de tener el modelo User importado

class GestionUsuariosController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = User::all();

        // Pasar usuarios a la vista
        return view('gestionusuarios', ['usuarios' => $usuarios]);
    }
}
