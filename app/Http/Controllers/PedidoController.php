<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::all();
        return response()->json($pedido);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->nombre_cliente = $request->input('nombre_cliente');
        $pedido->apellido_cliente = $request->input('apellido_cliente');
        $pedido->rut_cliente = $request->input('rut_cliente');
        $pedido->correo_cliente = $request->input('correo_cliente');
        $pedido->fecha = $request->input('fecha');


        $pedido->tipo_entrega = $request->input('tipo_entrega');
        $pedido->hora_estimada = $request->input('hora_estimada');
        $pedido->estado = $request->input('estado');
        $pedido->id_usuario = $request->input('id_usuario');

        $pedido->id_despacho = $request->input('id_despacho');
        $pedido->id_pago = $request->input('id_pago');

        $pedido->save();
        return response()->json($pedido);

    }

    public function show($id)
    {
        $pedido = Pedido::find($id);
        return response()->json($pedido);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->nombre_cliente = $request->input('nombre_cliente');
        $pedido->apellido_cliente = $request->input('apellido_cliente');
        $pedido->rut_cliente = $request->input('rut_cliente');
        $pedido->correo_cliente = $request->input('correo_cliente');
        $pedido->fecha = $request->input('fecha');


        $pedido->tipo_entrega = $request->input('tipo_entrega');
        $pedido->hora_estimada = $request->input('hora_estimada');
        $pedido->estado = $request->input('estado');
        $pedido->id_usuario = $request->input('id_usuario');

        $pedido->id_despacho = $request->input('id_despacho');
        $pedido->id_pago = $request->input('id_pago');

        $pedido->save();
        return response()->json($pedido);

    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return "Eliminado";

    }
}
