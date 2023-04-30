<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{

    public function index()
    {
        $tareas = Tarea::all();
        return $tareas;
    }

    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;

        $tarea->save();
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);
        return $tarea;
    }
    public function update(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($request->id);
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;

        $tarea->save();
        return $tarea;
    }

    public function destroy($id)
    {
        $tarea = Tarea::destroy($id);
        return $tarea;
    }
}
