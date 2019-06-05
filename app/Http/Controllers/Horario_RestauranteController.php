<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Restaurante;
use App\Http\Requests\Horario_RestauranteRequest;

class Horario_RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horario_restaurante = Horario_Restaurante::all();
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
        $horario_restaurante = new Horario_Restaurante();
        $horario_restaurante->dia_semana = $request->input('dia_semana');
        $horario_restaurante->hora_apertura = $request->input('hora_apertura');
        $horario_restaurante->hora_cierre = $request->input('hora_cierre');

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
        $horario_restaurante = Horario_Restaurante::find($id);
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
        $horario_restaurante = Horario_Restaurante::find($id);
        $horario_restaurante->dia_semana = $request->input('dia_semana');
        $horario_restaurante->hora_apertura = $request->input('hora_apertura');
        $horario_restaurante->hora_cierre = $request->input('hora_cierre');

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
        $horario_restaurante = Horario_Restaurante::find($id);
        $horario_restaurante ->delete();
        return "Eliminado!";
    }
}
