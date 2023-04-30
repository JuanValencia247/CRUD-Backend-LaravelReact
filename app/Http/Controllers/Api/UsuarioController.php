<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->edad = $request->edad;

        $usuario->save();
    }

 
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }

    public function update(Request $request, $id)
    {
        $usuario =Usuario::findOrFail($request->id);
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->edad = $request->edad;
        
        $usuario->save();
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::destroy($id);
        return $usuario;
    }
}
