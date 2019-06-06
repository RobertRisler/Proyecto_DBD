<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Mesa;
use App\Http\Requests\Horario_MesaRequest;

class Horario_MesaController extends Controller
{

    public function index()
    {
        $horario_restaurante = Horario_Mesa::all();
        return response()->json($horario_restaurante);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $horario_restaurante = new Horario_Mesa();
        $horario_restaurante->hora_inicio = $request->input('hora_inicio');
        $horario_restaurante->hora_fin = $request->input('hora_fin');
        $horario_restaurante->estado_reservacion = $request->input('estado_reservacion');
        $horario_restaurante->id_mesa = $request->input('id_mesa');

        $horario_restaurante->save();
        return response()->json($horario_restaurante);
    }


    public function show($id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        return response()->json($horario_restaurante);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        $horario_restaurante->hora_inicio = $request->input('hora_inicio');
        $horario_restaurante->hora_fin = $request->input('hora_fin');
        $horario_restaurante->estado_reservacion = $request->input('estado_reservacion');
        $horario_restaurante->id_mesa = $request->input('id_mesa');

        $horario_restaurante->save();
        return response()->json($horario_restaurante);
    }

    public function destroy($id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        $horario_restaurante ->delete();
        return "Eliminado!";
    }
}
