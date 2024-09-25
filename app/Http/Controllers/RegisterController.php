<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.registrar');
    }
    public function store(Request $request) {
        // dd('Post...');

        $validated = $request->validate([
            'name'=>'required|max:30',
            'username'=> 'required|unique:users|max:20',
            'email'=> 'required|unique:users|max:40',
            'password' =>'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect('/')->with('correcto_registro', 'Usuario Registrado correctamente');
    }
    
}
