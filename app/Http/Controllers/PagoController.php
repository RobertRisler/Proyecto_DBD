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
        $numeroMonto = $request->input('monto');
        $tipo = $request->input('tipo');
        $idTarjeta = $request->input('id_tarjeta');

        if((is_numeric($numeroMonto)) && $numeroMonto >= 0){
            if ($tipo == 'efectivo') {
                if ($idTarjeta == null) {
                    $pago = new Pago();
                    $pago->tipo = $request->input('tipo');
                    $pago->monto = $request->input('monto');
                    $pago->fecha = $request->input('fecha');
                    $pago->id_tarjeta = $request->input('id_tarjeta');

                    $pago->save();
                    return response()->json($pago);
                }
                else{
                    return "Error id_tarjeta debe ser nulo (efectivo no asocia tarjeta)";
                }  
            }
            if ($tipo == 'tarjeta'){
                $pago = new Pago();
                $pago->tipo = $request->input('tipo');
                $pago->monto = $request->input('monto');
                $pago->fecha = $request->input('fecha');
                $pago->id_tarjeta = $request->input('id_tarjeta');

                $pago->save();
                return response()->json($pago);
            }
            else{
                return "Error tipo invalido";
            }
        }
        else{
            return "Error parametros de entradas";
        }    


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
        $numeroMonto = $request->input('monto');
        $tipo = $request->input('tipo');
        $idTarjeta = $request->input('id_tarjeta');
        
        if((is_numeric($numeroMonto)) && $numeroMonto >= 0){
            if ($tipo == 'efectivo') {
                if ($idTarjeta == null) {
                    $pago = Pago::find($id);
                    $pago->tipo = $request->input('tipo');
                    $pago->monto = $request->input('monto');
                    $pago->fecha = $request->input('fecha');
                    $pago->id_tarjeta = $request->input('id_tarjeta');

                    $pago->save();
                    return response()->json($pago);
                }
                else{
                    return "Error id_tarjeta debe ser nulo (efectivo no asocia tarjeta)";
                }  
            }
            if ($tipo == 'tarjeta'){
                $pago = Pago::find($id);
                $pago->tipo = $request->input('tipo');
                $pago->monto = $request->input('monto');
                $pago->fecha = $request->input('fecha');
                $pago->id_tarjeta = $request->input('id_tarjeta');

                $pago->save();
                return response()->json($pago);
            }
            else{
                return "Error tipo invalido";
            }
        }
        else{
            return "Error parametros de entradas";
        }

    }

    public function destroy($id)
    {
        $pago = Pago::find($id);
        $pago ->delete();
        return "Eliminado";



    }
}
