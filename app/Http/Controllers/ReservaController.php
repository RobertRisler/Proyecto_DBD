<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    //
    public function index()
    {
        $reserva = Reserva::all();
        return response()->json($reserva);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->cantidad_personas = $request->input('cantidad_personas');
        $reserva->fecha_resevacion = $request->input('fecha_resevacion');
        $reserva->rut_cliente = $request->input('rut_cliente');
        $reserva->nombre_cliente = $request->input('nombre_cliente');
        $reserva->apellido_cliente = $request->input('apellido_cliente');
        $reserva->estado = $request->input('estado');
        $reserva->id_usuario = $request->input('id_usuario');

        $reserva->save();
        return response()->json($reserva);

    }

    public function show($id)
    {

        $reserva = Reserva::find($id);
        return response()->json($reserva);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $reserva = Reserva::find($id);
        $reserva->cantidad_personas = $request->input('cantidad_personas');
        $reserva->fecha_resevacion = $request->input('fecha_resevacion');
        $reserva->rut_cliente = $request->input('rut_cliente');
        $reserva->nombre_cliente = $request->input('nombre_cliente');
        $reserva->apellido_cliente = $request->input('apellido_cliente');
        $reserva->estado = $request->input('estado');
        $reserva->id_usuario = $request->input('id_usuario');

        $reserva->save();
        return response()->json($reserva);
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva ->delete();
        return "Eliminado!";

    }
}
