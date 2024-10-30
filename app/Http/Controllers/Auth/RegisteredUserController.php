<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View; 
use App\Models\Empresa;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
 
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function empresa_registro(Request $request){
        // Validar los datos de registro
    $request->validate([
        'nombre_empresa' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:empresas',
        'nit' => 'required|string|max:20',
        'rublo' => 'required|string|max:255',
        'password' => 'required|string|confirmed|min:8',
    ]);

    // Crear la empresa en la tabla `empresa`
    $empresa = Empresa::create([
        'nombre_empresa' => $request->nombre_empresa,
        'email' => $request->email,
        'nit' => $request->nit,
        'rublo' => $request->rublo,
        'password' => Hash::make($request->password), // Asegúrate de que este campo esté correctamente asignado
    ]);

    // Autenticar al usuario como la empresa y redirigir al dashboard
    Auth::login($empresa); // Ajusta esto si tienes una autenticación específica para `Empresa`

    return redirect()->route('dashboard');
        
  }

}
