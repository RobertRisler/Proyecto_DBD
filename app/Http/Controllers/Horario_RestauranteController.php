<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Restaurante;
use App\Http\Requests\Horario_RestauranteRequest;

class Horario_RestauranteController extends Controller
{

    public function index()
    {
        $horario_restaurante = Horario_Restaurante::all();
        return response()->json($horario_restaurante);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $horario_restaurante = new Horario_Restaurante();
        $horario_restaurante->dia_semana = $request->input('dia_semana');
        $horario_restaurante->hora_apertura = $request->input('hora_apertura');
        $horario_restaurante->hora_cierre = $request->input('hora_cierre');
        $horario_restaurante->id_restaurante = $request->input('id_restaurante');


        $horario_restaurante->save();
        return response()->json($horario_restaurante);
    }


    public function show($id)
    {
        $horario_restaurante = Horario_Restaurante::find($id);
        return response()->json($horario_restaurante);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $horario_restaurante = Horario_Restaurante::find($id);
        $horario_restaurante->dia_semana = $request->input('dia_semana');
        $horario_restaurante->hora_apertura = $request->input('hora_apertura');
        $horario_restaurante->hora_cierre = $request->input('hora_cierre');
        $horario_restaurante->id_restaurante = $request->input('id_restaurante');

        $horario_restaurante->save();
        return response()->json($horario_restaurante);

    }

    public function destroy($id)
    {
        $horario_restaurante = Horario_Restaurante::find($id);
        $horario_restaurante ->delete();
        return "Eliminado!";
    }
}
