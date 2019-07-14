<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comuna;
use App\Http\Requests\ComunaRequest;


class ComunaController extends Controller
{

    public function index()
    {
        $comunas = Comuna::all();
        return response()->json($comunas);
        //return view('home', compact('comunas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $comuna = new Comuna();
        $comuna->nombre = $request->input('nombre');
        $comuna->id_ciudad = $request->input('id_ciudad');


        $comuna->save();
        return response()->json($comuna);

    }

    public function show($id)
    {
        $comuna = Comuna::find($id);
        return response()->json($comuna);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $comuna = Comuna::find($id);
        $comuna->update($request->all());

        $comuna->save();
        return response()->json($comuna);


    }

    public function destroy($id)
    {
        $comuna = Comuna::find($id);
        $comuna ->delete();
        return "Eliminado";

    }
}
