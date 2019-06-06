<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;
use App\Http\Requests\TarjetaRequest;

class TarjetaController extends Controller
{

    public function index()//rellenar
    {
        $tarjetas = Tarjeta::all();
        return response()->json($tarjetas);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)//rellenar
    {
        $tarjeta = new Tarjeta();
        $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
        $tarjeta->numero_cuotas = $request->input('numero_cuotas');
        $tarjeta->tipo = $request->input('tipo');

        $tarjeta->save();
        return response()->json($tarjeta);
    }


    public function show($id)//rellenar
    {
        $tarjeta = Tarjeta::find($id);
        return response()->json($tarjeta);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)//rellenar
    {
        $tarjeta = Tarjeta::find($id);
        $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
        $tarjeta->numero_cuotas = $request->input('numero_cuotas');
        $tarjeta->tipo = $request->input('tipo');

        $tarjeta->save();
        return response()->json($tarjeta);
    }


    public function destroy($id)//rellenar
    {
        $tarjeta = Tarjeta::find($id);
        $tarjeta ->delete();
        return "Eliminado!";
    }
}
