<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Http\Requests\PagoRequest;

class PagoController extends Controller
{
    public function index()
    {

        $pago = Pago::all();
        return response()->json($pago);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $pago = new Pago();
        $pago->tipo = $request->input('tipo');
        $pago->monto = $request->input('monto');
        $pago->fecha = $request->input('fecha');


        $pago->save();
        return response()->json($pago);


    }

    public function show($id)
    {

        $pago = Pago::find($id);
        return response()->json($pago);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $pago = Pago::find($id);
        $pago->tipo = $request->input('tipo');
        $pago->monto = $request->input('monto');
        $pago->fecha = $request->input('fecha');


        $pago->save();
        return response()->json($pago);
    }

    public function destroy($id)
    {
        $pago = Pago::find($id);
        $pago ->delete();
        return "Eliminado";


    }
}
