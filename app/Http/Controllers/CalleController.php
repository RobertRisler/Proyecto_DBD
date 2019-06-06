<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calle;
use App\Http\Requests\CalleRequest;


class CalleController extends Controller
{
    public function index()
    {

        $calle = Calle::all();
        return response()->json($calle);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $numero = $request->input('numero');

        if((is_numeric($numero)) && $numero >= 0){

            $calle = new Calle();
            $calle->nombre = $request->input('nombre');
            $calle->numero = $request->input('numero');
            $calle->save();
            return response()->json($calle);
        }
        else{
            return "Error parametros de entradas";
        }
    }

    public function show($id)
    {

        $calle = Calle::find($id);
        return response()->json($calle);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $numero = $request->input('numero');

        if((is_numeric($numero)) && $numero >= 0){

            $calle = Calle::find($id);
            $calle->nombre = $request->input('nombre');
            $calle->numero = $request->input('numero');
            $calle->save();
            return response()->json($calle);
        }
        else{
            return "Error parametros de entradas";
        }
    }

    public function destroy($id)
    {

        $calle = Calle::find($id);
        $calle ->delete();
        return "Eliminado!";

    }

}
