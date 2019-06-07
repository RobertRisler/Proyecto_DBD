<?php

namespace App\Http\Controllers;
use App\CalleComuna;
use Illuminate\Http\Request;

class CalleComunaController extends Controller
{
    public function index()
    {

        $calleComuna = CalleComuna::all();
        return response()->json($calleComuna);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {




        $calleComuna = new Calle();
        $calleComuna->id_comuna = $request->input('id_comuna');
        $calleComuna->id_calle = $request->input('id_calle');
        $calleComuna->save();
        return response()->json($calleComuna);


    }

    public function show($id)
    {

        $calleComuna = CalleComuna::find($id);
        return response()->json($calleComuna);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $calleComuna = CalleComuna::find($id);
        $calleComuna->id_calle = $request->input('id_calle');
        $calleComuna->id_comuna = $request->input('id_comuna');
        $calleComuna->save();
            return response()->json($calleComuna);

    }

    public function destroy($id)
    {

        $calleComuna = CalleComuna::find($id);
        $calleComuna ->delete();
        return "Eliminado!";

    }

}
