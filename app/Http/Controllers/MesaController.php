<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use App\Restaurante;
use App\Http\Requests\MesaRequest;

class MesaController extends Controller
{
    public function index()
    {
        $mesa = Mesa::All();
        return response()->json($mesa);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $numeroAsientos = $request->input('cantidad_asientos');

        if((is_numeric($numeroAsientos)) && $numeroAsientos > 0){
            $mesa = new Mesa();
            $mesa->cantidad_asientos = $request->input('cantidad_asientos');
            $mesa->id_reserva = $request->input('id_reserva');
            $mesa->id_restaurante = $request->input('id_restaurante');


            $mesa->save();
            return response()->json($mesa);
        }
        else{
            return "Error parametros de entradas";
        }

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
        $numeroAsientos = $request->input('cantidad_asientos');

        if((is_numeric($numeroAsientos)) && $numeroAsientos > 0){
            $mesa = Mesa::find($id);
            $mesa->cantidad_asientos = $request->input('cantidad_asientos');
            $mesa->id_reserva = $request->input('id_reserva');
            $mesa->id_restaurante = $request->input('id_restaurante');

            $mesa->save();
            return response()->json($mesa);
        }
        else{
            return "Error parametros de entradas";
        }
    }

    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return "Eliminado";

    }
}
