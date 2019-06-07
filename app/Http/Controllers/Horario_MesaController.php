<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Mesa;
use App\Http\Requests\Horario_MesaRequest;

class Horario_MesaController extends Controller
{

    public function index()
    {
        $horario_mesa = Horario_Mesa::all();
        return response()->json($horario_mesa);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $horario_mesa = new Horario_Mesa();
        $horario_mesa->hora_inicio = $request->input('hora_inicio');
        $horario_mesa->hora_fin = $request->input('hora_fin');
        $horario_mesa->estado_reservacion = $request->input('estado_reservacion');
        $horario_mesa->id_mesa = $request->input('id_mesa');

        $horario_mesa->save();
        return response()->json($horario_mesa);
    }


    public function show($id)
    {
        $horario_mesa = Horario_Mesa::find($id);
        return response()->json($horario_mesa);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $horario_mesa = Horario_Mesa::find($id);
        $horario_mesa->hora_inicio = $request->input('hora_inicio');
        $horario_mesa->hora_fin = $request->input('hora_fin');
        $horario_mesa->estado_reservacion = $request->input('estado_reservacion');
        $horario_mesa->id_mesa = $request->input('id_mesa');

        $horario_mesa->save();
        return response()->json($horario_mesa);
    }

    public function destroy($id)
    {
        $horario_mesa = Horario_Mesa::find($id);
        $horario_mesa ->delete();
        return "Eliminado!";
    }
}
