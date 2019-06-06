<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Http\Requests\ComentarioRequest;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentario = Comentario::all();
        return response()->json($comentario);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $comentario = new Comentario();
        $comentario->mensaje = $request->input('mensaje');
        $comentario->valoracion = $request->input('valoracion');
        $comentario->fecha = $request->input('fecha');
        $comentario->id_usuario = $request->input('id_usuario');
        $comentario->id_restaurante = $request->input('id_restaurante');

        $comentario->save();
        return response()->json($comentario);



    }

    public function show($id)
    {
        $comentario  = Comentario::find($id);
        return response()->json($comentario);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $comentario  = Comentario::find($id);
        $comentario->mensaje = $request->input('mensaje');
        $comentario->valoracion = $request->input('valoracion');
        $comentario->fecha = $request->input('fecha');
        $comentario->id_usuario = $request->input('id_usuario');
        $comentario->id_restaurante = $request->input('id_restaurante');

        $comentario->save();
        return response()->json($comentario);

    }

    public function destroy($id)
    {
        $comentario  = Comentario::find($id);
        $comentario ->delete();
        return "Eliminado";

    }
}
