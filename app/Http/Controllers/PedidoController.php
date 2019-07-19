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
use App\Direccion;
use App\Http\Requests\PedidoRequest;
use Auth;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::all();
        return response()->json($pedido);
		//return view('vistaUbicacionPedido')
		//	->withCiudades($ciudades);

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
	public static function enviarPedido(Request $request){
		$pedido = new Pedido();
		$calles = Calle::all();
		$comunas = Comuna::all();
		$ciudades = Ciudad::all();
		$direcciones = Direccion::all();
		$alias = $request->get('alias');
		$nombre_ciudad = $request->get('nombre_ciudad');
		$nombre_comuna = $request->get('nombre_comuna');
		$nombre_calle = $request->get('nombre_calle');
		$numero = $request->get('numero');
		$telefono = $request->get('telefono');
		$existe=0;
		$ciudad_pedido;
		foreach($ciudades as $ciudad){
			if ($ciudad->nombre==$nombre_ciudad){
				$existe=1;
				$ciudad_pedido=$ciudad;
				break;
			}
		}
		if ($existe==0){
			return view('vistaUbicacionPedido');
		}
		$existe=0;
		$comuna_pedido;
		foreach($comunas as $comuna){
			if ($comuna->nombre==$nombre_comuna){
				$existe=1;
				$comuna_pedido=$comuna;
				break;
			}
		}
		if (($existe==0) || (($existe==1)&&($comuna_pedido->id_ciudad!=$ciudad_pedido->id))){
			return view('vistaUbicacionPedido');
		}
		$existe=0;
		$calle_pedido;
		foreach($calles as $calle){
			if (($calle->nombre==$nombre_calle)&&($calle->numero==$numero)){
				$existe=1;
				$calle_pedido=$calle;
				break;
			}
		}
		if ($existe==0){
			$calle_pedido = new Calle();
			$calle_pedido->nombre=$nombre_calle;
			$calle_pedido->numero=$numero;
			$direccion_pedido = new Direccion();
			$direccion_pedido->alias=$alias;
			$direccion_pedido->id_calle=$calle_pedido->id;
			$calle_pedido->save();
			$direccion_pedido->save();
		}
		$pedido->nombre_cliente= auth()->user()->nombre;
		$pedido->apellido_cliente= auth()->user()->apellido;
		$pedido->rut_cliente="xxxxxxxx-x";
		$pedido->correo_cliente= auth()->user()->correo;
		$pedido->fecha="12-12-2019";
		$pedido->tipo_entrega="True";
		$pedido->hora_estimada="20:20:20";
		$pedido->estado="True";
		$pedido->id_usuario=1;
		$pedido->id_despacho=1;
		$pedido->id_pago=1;
		$pedido->save();
		return view('vistaBuscar');
	}
}
