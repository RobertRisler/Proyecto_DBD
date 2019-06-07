<?php

namespace App\Http\Controllers;
use App\PedidoProducto;
use Illuminate\Http\Request;

class PedidoProductoController extends Controller
{
    public function index()
    {

        $pedidoProducto = PedidoProducto::all();
        return response()->json($pedidoProducto);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {




        $pedidoProducto = new PedidoProducto();
        $pedidoProducto->id_pedido = $request->input('id_pedido');
        $pedidoProducto->id_producto = $request->input('id_producto');
        $pedidoProducto->save();
        return response()->json($pedidoProducto);


    }

    public function show($id)
    {

        $pedidoProducto = PedidoProducto::find($id);
        return response()->json($pedidoProducto);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $pedidoProducto = PedidoProducto::find($id);
        $pedidoProducto->id_pedido = $request->input('id_pedido');
        $pedidoProducto->id_producto = $request->input('id_producto');
        $pedidoProducto->save();
        return response()->json($pedidoProducto);

    }

    public function destroy($id)
    {

        $pedidoProducto = PedidoProducto::find($id);
        $pedidoProducto ->delete();
        return "Eliminado!";

    }
}
