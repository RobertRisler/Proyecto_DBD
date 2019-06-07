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
        $numeroCuotas = $request->input('numero_cuotas');
        $cuatroDigitos = $request->input('cuatro_digitos');
        $tipo = $request->input('tipo');

        if((is_numeric($cuatroDigitos)) && ($cuatroDigitos >= 0) && ($cuatroDigitos < 10000)){
            if ($tipo == 'debito') {
                if((is_numeric($numeroCuotas)) && $numeroCuotas == 0){
                    $tarjeta = new Tarjeta();
                    $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
                    $tarjeta->numero_cuotas = $request->input('numero_cuotas');
                    $tarjeta->tipo = $request->input('tipo');

                    $tarjeta->save();
                    return response()->json($tarjeta);
                }
                else{
                    return "Error debito debe tener 0 cuotas";
                }
            }
            if ($tipo == 'credito') {
                if((is_numeric($numeroCuotas)) && ($numeroCuotas > 0) && ($numeroCuotas < 49)){
                    $tarjeta = new Tarjeta();
                    $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
                    $tarjeta->numero_cuotas = $request->input('numero_cuotas');
                    $tarjeta->tipo = $request->input('tipo');

                    $tarjeta->save();
                    return response()->json($tarjeta);
                }
                else{
                    return "Error numero cuotas no valido";
                } 
            }
            else{
                return "Error tipo invalido";
            }
        }
        else{
            return "Error cuatro digitos invalidos";
        }   
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
        $numeroCuotas = $request->input('numero_cuotas');
        $cuatroDigitos = $request->input('cuatro_digitos');
        $tipo = $request->input('tipo');

        if((is_numeric($cuatroDigitos)) && ($cuatroDigitos >= 0) && ($cuatroDigitos < 10000)){
            if ($tipo == 'debito') {
                if((is_numeric($numeroCuotas)) && $numeroCuotas == 0){
                    $tarjeta = Tarjeta::find($id);
                    $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
                    $tarjeta->numero_cuotas = $request->input('numero_cuotas');
                    $tarjeta->tipo = $request->input('tipo');

                    $tarjeta->save();
                    return response()->json($tarjeta);
                }
                else{
                    return "Error debito debe tener 0 cuotas";
                }
            }
            if ($tipo == 'credito') {
                if((is_numeric($numeroCuotas)) && ($numeroCuotas > 0) && ($numeroCuotas < 49)){
                    $tarjeta = Tarjeta::find($id);
                    $tarjeta->cuatro_digitos = $request->input('cuatro_digitos');
                    $tarjeta->numero_cuotas = $request->input('numero_cuotas');
                    $tarjeta->tipo = $request->input('tipo');

                    $tarjeta->save();
                    return response()->json($tarjeta);
                }
                else{
                    return "Error numero cuotas no valido";
                } 
            }
            else{
                return "Error tipo invalido";
            }
        }
        else{
            return "Error cuatro digitos invalidos";
        } 
        
    }


    public function destroy($id)//rellenar
    {
        $tarjeta = Tarjeta::find($id);
        $tarjeta ->delete();
        return "Eliminado!";
    }
}
