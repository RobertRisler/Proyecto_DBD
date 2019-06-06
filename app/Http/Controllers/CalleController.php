<?php

namespace App\Http\Controllers;


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

        $calle = new Calle();
        $calle->nombre = $request->input('nombre');
        $calle->numero = $request->input('numero');

        $calle->save();
        return response()->json($calle);
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

        $calle = Calle::find($id);
        $calle->nombre = $request->input('nombre');
        $calle->numero = $request->input('numero');

        $calle->save();
        return response()->json($calle);


    }

    public function destroy($id)
    {

        $calle = Calle::find($id);
        $calle ->delete();
        return "Eliminado!";

    }

}
