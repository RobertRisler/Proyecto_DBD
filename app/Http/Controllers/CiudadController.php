<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class CiudadController extends Controller
{
    //
=======
use App\Ciudad;
use App\Http\Requests\CiudadRequest;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudad = Ciudad::all();
        return response()->json($ciudad);

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
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
}
