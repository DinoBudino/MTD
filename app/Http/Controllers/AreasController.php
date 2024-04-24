<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
        // Aquí puedes incluir cualquier lógica para obtener datos necesarios para la vista
        return view('areas'); // Asegúrate de que el archivo areas.blade.php exista en resources/views
    }
}
