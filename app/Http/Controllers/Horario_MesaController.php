<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Mesa;
use App\Mesa;
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
        $horario_mesa->update($request->all());

        $horario_mesa->save();
        return response()->json($horario_mesa);
    }

    public function destroy($id)
    {
        $horario_mesa = Horario_Mesa::find($id);
        $horario_mesa ->delete();
        return "Eliminado!";
    }

    public function agregarhorario_mesa(Request $request, $id){
        if ($mesa = Mesa::find($id)){
            $horario_mesa = new Horario_Mesa();
            $horario_mesa->hora_inicio = $request->input('hora_inicio');
            $horario_mesa->hora_fin = $request->input('hora_fin');
            $horario_mesa->estado_reservacion = $request->input('estado_reservacion');
            $horario_mesa->id_mesa = $id;
            $horario_mesa->save();
            return response()->json($horario_mesa);
        }
        else{
            return "No se ha encontrado la mesa para el horario_mesa";
        }
    }
    public function mostrarhorario_mesas($id){
        if ($mesa = Mesa::find($id)){
            $horario_mesa = Horario_Mesa::where('id_mesa',$id)->get();
            return response()->json($horario_mesa);
        }
        else{
            return "No se ha encontrado la mesa";
        }
    }
    public function modificarhorario_mesa(Request $request, $id_mesa, $id_horario_mesa){
        if (($horario_mesa = Horario_Mesa::find($id_horario_mesa))&&($horario_mesa->id_mesa == $id_mesa)){
            $horario_mesa->update($request->all());
            $horario_mesa->save();
            return response()->json($horario_mesa);
        }
        else{
            return "No existe el horario_mesa";
        }
    }
    public function eliminarhorario_mesa($id_mesa, $id_horario_mesa){
        if (($horario_mesa = Horario_Mesa::find($id_horario_mesa))&&($horario_mesa->id_mesa == $id_mesa)){
            $horario_mesa ->delete();
            return "Eliminado";
        }
        else{
            return "No existe el horario_mesa";
        }
    }
	
	
	public function byMesas($id){
        return Horario_Mesa::where('id_mesa', $id)->get();


    }
}
