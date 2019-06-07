<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despacho;
use App\Pedido;
use App\Http\Requests\DespachoRequest;

class DespachoController extends Controller
{
    public function index()
    {
        $despacho = Despacho::all();
        return response()->json($despacho);

    }

    /*Muestra pedido de un despacho*/
    public function mostrarPedido($id_despacho)
    {

        if($despacho = Despacho::find($id_despacho)) {
            
            $despacho = Despacho::find($id_despacho);
            $pedido = $despacho->pedidos()->get();
            return $pedido;


        }else{
            return "No se encuentra el pedido.";
        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $despacho = new Despacho();
        $despacho->nombre_repartidor = $request->input('nombre_repartidor');
        $despacho->rut_repartidor = $request->input('rut_repartidor');
        $despacho->tiempo_estimado = $request->input('tiempo_estimado');
        $despacho->estado_despacho = $request->input('estado_despacho');
        $despacho->hora_despacho = $request->input('hora_despacho');

        $despacho->save();
        return response()->json($despacho);

    }

    public function show($id)
    {
        $despacho = Despacho::find($id);
        return response()->json($despacho);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $despacho = Despacho::find($id);
        $despacho->nombre_repartidor = $request->input('nombre_repartidor');
        $despacho->rut_repartidor = $request->input('rut_repartidor');
        $despacho->tiempo_estimado = $request->input('tiempo_estimado');
        $despacho->estado_despacho = $request->input('estado_despacho');
        $despacho->hora_despacho = $request->input('hora_despacho');

        $despacho->save();
        return response()->json($despacho);

    }

    public function destroy($id)
    {

        $despacho = Despacho::find($id);
        $despacho ->delete();
        return "Eliminado!";

    }
}
