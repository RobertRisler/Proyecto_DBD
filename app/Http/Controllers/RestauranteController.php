<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
use App\Http\Requests\RestauranteRequest;

class RestauranteController extends Controller
{
    //
    public function index()
    {
        $restaurante = Restaurante::all();
        return response()->json($restaurante);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $valoracion = $request->input('promedio_valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $restaurante = new Restaurante();
            $restaurante->nombre = $request->input('nombre');
            $restaurante->descripcion = $request->input('descripcion');
            $restaurante->promedio_valoracion = $request->input('promedio_valoracion');
            $restaurante->telefono = $request->input('telefono');
            $restaurante->hace_despacho = $request->input('hace_despacho');
            $restaurante->validacion = $request->input('validacion');
            $restaurante->id_calle = $request->input('id_calle');

            $restaurante->save();
            return response()->json($restaurante);
        }
        else{
            return "Error parametros de entradas";
        }

    }

    public function show($id)
    {

        $restaurante = Restaurante::find($id);
        return response()->json($restaurante);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $valoracion = $request->input('promedio_valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $restaurante = Restaurante::find($id);
            $restaurante->nombre = $request->input('nombre');
            $restaurante->descripcion = $request->input('descripcion');
            $restaurante->promedio_valoracion = $request->input('promedio_valoracion');
            $restaurante->telefono = $request->input('telefono');
            $restaurante->hace_despacho = $request->input('hace_despacho');
            $restaurante->validacion = $request->input('validacion');
            $restaurante->id_calle = $request->input('id_calle');

            $restaurante->save();
            return response()->json($restaurante);
        }
        else{
            return "Error parametros de entradas";
        }


    }

    public function destroy($id)
    {

        $restaurante = Restaurante::find($id);
        $restaurante ->delete();
        return "Eliminado!";
    }
}
