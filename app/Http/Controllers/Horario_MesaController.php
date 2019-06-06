<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Mesa;
use App\Http\Requests\Horario_MesaRequest;

class Horario_MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horario_restaurante = Horario_Mesa::all();
        return response()->json($horario_restaurante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Horario_Mesa::create($request->all());
        $horario_restaurante = new Horario_Mesa();
        $horario_restaurante->hora_inicio = $request->input('hora_inicio');
        $horario_restaurante->hora_fin = $request->input('hora_fin');
        $horario_restaurante->estado_reservacion = $request->input('estado_reservacion');

        $horario_restaurante->save();
        return response()->json($horario_restaurante);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        return response()->json($horario_restaurante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        $horario_restaurante->hora_inicio = $request->input('hora_inicio');
        $horario_restaurante->hora_fin = $request->input('hora_fin');
        $horario_restaurante->estado_reservacion = $request->input('estado_reservacion');

        $horario_restaurante->save();
        return response()->json($horario_restaurante);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario_restaurante = Horario_Mesa::find($id);
        $horario_restaurante ->delete();
        return "Eliminado!";
    }
}
