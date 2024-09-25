<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['users'] = User::paginate(10);

        return view('usuarios', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('edit', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required|max:30',
            'username'=> 'required|max:20',
            'email'=> 'required|max:40',
            'password' =>'required',
        ]);

        $datosUser = request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUser);
        return redirect('usuarios')->with('correcto_edit', 'Usuario Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios')->with('correcto_delete', 'Usuario Eliminado correctamente');
    }
}
