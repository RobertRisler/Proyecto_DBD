<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use App\Http\Requests\MesaRequest;

class MesaController extends Controller
{
    public function index()
    {
        $mesa = Mesa::findAll();
        return response()->json($mesa);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mesa = new Mesa();
        $mesa->cantidad_asientos = $request->input('cantidad_asientos');
        $mesa->estado_reservacion = $request->input('estado_reservacion');
        $mesa->id_reserva = $request->input('id_reserva');
        $mesa->id_restaurante = $request->input('id_restaurante');


        $mesa->save();
        return response()->json($mesa);

    }

    public function show($id)
    {
        $mesa = Mesa::find($id);
        return response()->json($mesa);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $mesa = Mesa::find($id);
        $mesa->cantidad_asientos = $request->input('cantidad_asientos');
        $mesa->estado_reservacion = $request->input('estado_reservacion');
        $mesa->id_reserva = $request->input('id_reserva');
        $mesa->id_restaurante = $request->input('id_restaurante');


        $mesa->save();
        return response()->json($mesa);

    }

    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return "Eliminado";

    }
}
