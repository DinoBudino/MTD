<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function crearUsuario(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'telefono' => 'required|unique:users|max:255',
            'correo' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        // Crear un nuevo usuario
        $usuario = User::create([
            'nombre' => $validatedData['nombre'],
            'telefono' => $validatedData['telefono'],
            'correo' => $validatedData['correo'],
            'password' => Hash::make($validatedData['password']),
            'rol' => 'maker', // Asignar rol por defecto
            'estado' => true, // Asignar estado activo
        ]);

        // Iniciar sesión con el usuario creado
        Auth::login($usuario);

        // Redirigir a la página privada
        return redirect(route('landinglog')); //landinglog es la pagina cuando el usuario inicia sesion


    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);

        $credencial = [
            "correo" => $request->correo,
            "password" => $request->password,
        ];

        if (Auth::attempt($credencial, $request->filled('remember'))) {
            // Si la autenticación fue exitosa, redirigir a la página protegida
            return redirect()->intended(route('landinglog')); // Asegúrate de que esta ruta está definida en tus rutas.
        }

        // Si la autenticación falla, redirigir de nuevo al formulario de login con el error
        return back()->withErrors(['error' => 'Correo o contraseña incorrectos'])->withInput($request->only('correo'));
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('welcome'));

    }

    public function registerview()
    {
        return view('auth');
    }

    public function landinglog()
    {
        return view('landinglog');
    }

    public function landingPage()
{
    return view('landinglog'); // Asegúrate de que esta vista exista en resources/views
}
}
