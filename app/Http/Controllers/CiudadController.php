<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ciudad;
use App\Comuna;
use App\Http\Requests\CiudadRequest;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudad = Ciudad::all();
        return response()->json($ciudad);

    }

    public function mostrarComunasCiudad($id_ciudad)
    {
        if($comuna = Comuna::find($id_ciudad)) {
            $comuna = Comuna::where('id_ciudad', $id_ciudad)->get();
            return response()->json($comuna);
        }else{
            return "No se encuentra la ciudad.";
        }

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $ciudad = new Ciudad();
        $ciudad->nombre = $request->input('nombre');


        $ciudad->save();
        return response()->json($ciudad);


    }

    public function show($id)
    {
        $ciudad = Ciudad::find($id);
        return response()->json($ciudad);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->nombre = $request->input('nombre');


        $ciudad->save();
        return response()->json($ciudad);

    }

    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return "Eliminado";


    }

}
