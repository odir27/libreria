<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('auth/login');
    }

    public function registro() {
        return view('auth/registro');
    }

    public function registrar(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = New User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        $credenciales  = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credenciales)) {
                return redirect()->route('libros.index');
        } else {
            return back()->with('error', 'Credenciales incorrectas.Vuelve a intentarlo');
        }

    }

    public function logout( Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        
        return redirect()->route('login');
    }

}
