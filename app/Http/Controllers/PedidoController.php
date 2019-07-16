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
	public function enviarPedido(Request $request){
		$despacho = new Despacho();
		$pedido = new Pedido();
		$calles = Calle::all();
		$comunas = Comuna::all();
		$ciudades = Ciudad::all();
		$pago = new Pago();
		$direcciones = Direccion::all();
		$alias = $request->input('alias');
		$nombre_ciudad = $request->input('nombre_ciudad');
		$nombre_comuna = $request->input('nombre_comuna');
		$nombre_calle = $request->input('nombre_calle');
		$numero = $request->input('numero');
		$telefono = $request->input('telefono');
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
			return "no existe la ciudad";
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
			return "no existe la comuna";
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
			$calle_pedido->numero==$numero;
			$direccion_pedido = new Direccion();
			$direccion_pedido->alias=$alias;
			$direccion_pedido->id_calle=$calle_pedido->id;
			$direccion_pedido->id_comuna=$comuna_pedido->id;
			$calle_pedido->save();
			$direccion_pedido->save();
		}
		$despacho->id_calle=$calle->id;
		$pedido->id_despacho=$despacho->id;
		$pedido->id_pago=$pago->id;
		$pago->save();
		$despacho->save();
		$pedido->save();
		return view('vistaUbicacionPedido')
				->withDespacho($despacho)
				->withPedido($pedido)
				->withCalles($calles)
				->withComunas($comunas)
				->withPago($pago)
				->withDirecciones($direcciones)
				->withAlias($alias)
				->withNombre_ciudad($nombre_ciudad)
				->witNombre_comuna($nombre_comuna)
				->withNombre_calle($nombre_calle)
				->withNumero($numero)
				->withTelefono($telefono);
	}
}
