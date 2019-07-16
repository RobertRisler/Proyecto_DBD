<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\User;
use App\Pago;
use App\Despacho;
use App\Calle;
use App\Comuna;
use App\Ciudad;
use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::all();
        return response()->json($pedido);

    }


    /*Muestra el usuario que realizo un pedido*/
    public function mostrarUsuario($id_pedido){
        $pedido = Pedido::find($id_pedido);
        $usuarios = $pedido->usuarios()->get();
        return $usuarios;

    }

    /*Muestra el usuario que realizo un pedido*/
    public function mostrarDespacho($id_pedido){
        $pedido = Pedido::find($id_pedido);
        $despacho = $pedido->despachos()->get();
        return $despacho;

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $despacho = $request->input('tipo_entrega');
        $idDespacho = $request->input('id_despacho');

        if($despacho == true){
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
        else{
           if ($idDespacho == null) {
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
           else{
                return "Error id_despacho debe ser nulo (retiro no asocia despacho)";
           }
        }

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
        $despacho = $request->input('tipo_entrega');
        $idDespacho = $request->input('id_despacho');

        if($despacho == true){
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
        else{
           if ($idDespacho == null) {
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
           else{
                return "Error id_despacho debe ser nulo (retiro no asocia despacho)";
           }
        }
        

    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return "Eliminado";

    }
	public function enviarPedido(Request $request, $id){
		$despacho = new Despacho();
		$pedido = new Pedido();
		$calles = Calle::all();
		$comunas = Comuna::all();
		$ciudades = Ciudad::all();
		$pagos = Pago::all();
		
	}
}
