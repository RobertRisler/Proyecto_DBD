<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
use App\Mesa;
use App\Calle;
use App\Comuna;
use App\Ciudad;
use App\Calle_Comuna;
use App\Historial;
use App\Http\Requests\RestauranteRequest;

class RestauranteController extends Controller
{
    //
    public function index()
    {
        $restaurante = Restaurante::all();
        return response()->json($restaurante);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $valoracion = $request->input('promedio_valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $restaurante = new Restaurante();
            $restaurante->nombre = $request->input('nombre');
            $restaurante->descripcion = $request->input('descripcion');
            $restaurante->promedio_valoracion = $request->input('promedio_valoracion');
            $restaurante->telefono = $request->input('telefono');
            $restaurante->hace_despacho = $request->input('hace_despacho');
            $restaurante->validacion = $request->input('validacion');
            $restaurante->id_calle = $request->input('id_calle');

            $restaurante->save();
            return response()->json($restaurante);
        }
        else{
            return "Error parametros de entradas";
        }

    }

    public function show($id)
    {

        $restaurante = Restaurante::find($id);
        return response()->json($restaurante);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
            $restaurante = Restaurante::find($id);
            $restaurante->update($request->all());

            $restaurante->save();
            return response()->json($restaurante);
        
    }

    public function destroy($id)
    {

        $restaurante = Restaurante::find($id);
        $restaurante ->delete();
        return "Eliminado!";
    }
	public function agregarMesa(Request $request, $id){
		if ($restaurante = Restaurante::find($id)){
			$mesa = new Mesa();
			$mesa->cantidad_asientos = $request->input('cantidad_asientos');
            $mesa->id_reserva = NULL;
            $mesa->id_restaurante = $id;
			$mesa->save();
			return response()->json($mesa);
		}
		else{
			return "No se encuentra el restaurante para la mesa";
		}
	}
	public function mostrarMesas($id){
		if (Restaurante::find($id)){
			$mesa = Mesa::where('id_restaurante',$id)->get();
			return response()->json($mesa);
		}
		else{
			return "No existe el restaurante";
		}
	}
	public function cambiarMesa(Request $request, $id_restaurante, $id_mesa){
		if ($restaurante = Restaurante::find($id_restaurante)){
			if ($mesa = Mesa::find($id_mesa)){
				if ($mesa->id_restaurante == $id_restaurante){
					$mesa->cantidad_asientos = $request->input('cantidad_asientos');
					$mesa->id_reserva = $request->input('id_reserva');
					$mesa->save();
					return response()->json($mesa);
				}
				else{
					return "La mesa no esta en el restaurante";
				}
			}
			else{
				return "No existe el restaurante";
			}
		}
		else{
			return "No existe el restaurante";
		}
	}
	public function eliminarMesa(Request $request, $id_restaurante, $id_mesa){
		if ($restaurante = Restaurante::find($id_restaurante)){
			if ($mesa = Mesa::find($id_mesa)){
				if ($mesa->id_restaurante == $id_restaurante){
					$mesa->delete();
					return "Eliminado!";
				}
				else{
					return "La mesa no esta en el restaurante";
				}
			}
			else{
				return "No existe el restaurante";
			}
		}
		else{
			return "No existe el restaurante";
		}
	}
	public function otraCalle($nombreCalle, $numeroCasa){
		$calle = new Calle();
		$calleComuna = new Calle_Comuna();
		$calle->nombre = $nombreCalle;
		$calle->numero = $numeroCasa;
		$calle->save();
		return $calle;
	}
	public function otraCalleComuna($id_calle, $id_comuna){
		$calleComuna = new Calle_Comuna();
		$calleComuna->id_calle = $id_calle;
		$calleComuna->id_comuna = $id_comuna;
		$calleComuna->save();
		return $calleComuna;
	}
	public function otraComuna($nombreComuna, $id_ciudad){
		$comuna = new Comuna();
		$comuna->nombre = $nombreComuna;
		$comuna->id_ciudad = $id_ciudad;
		$comuna->save();
		return $comuna;
	}
	public function crearRestaurante(Request $request){
		$restaurante = new Restaurante();
        $restaurante->nombre = $request->input('nombre');
        $restaurante->descripcion = $request->input('descripcion');
        $restaurante->promedio_valoracion = $request->input('promedio_valoracion');
        $restaurante->telefono = $request->input('telefono');
        $restaurante->hace_despacho = $request->input('hace_despacho');
        $restaurante->validacion = $request->input('validacion');
        $nombreCiudad = $request->input('nombre_ciudad');
		$nombreComuna = $request->input('nombre_comuna');
		$nombreCalle = $request->input('nombre_calle');
		$numeroCasa = $request->input('numero_casa');
		$auxCiudad = Ciudad::all();
		$auxComuna = Comuna::all();
		$auxCalle = Calle::all();
		$indexCiudad = 0;
		$indexComuna = 0;
		foreach ($auxCiudad as $ciudades){
			if ($ciudades->nombre == $nombreCiudad){
				$indeCiudad = $ciudades->id;
				break;
			}
		}
		foreach ($auxComuna as $comunas){
			if ($comunas->nombre == $nombreComuna){
				$indexComuna = $comunas->id;
				break;
			}
		}
		$existe = 0;
		foreach ($auxCalle as $calles){
			if (($calles->nombre == $nombreCalle) && ($calles->numero == $numeroCasa)){
				$existe = 1;
				break;
			}
		}
		if ($existe == 1){
			return "Ya existe un restaurante en la direccion";
		}
		if ($indexCiudad > 0){
			$ciudad = Ciudad::find($indexCiudad);
			if ($indexComuna > 0){
				$comuna = Comuna::find($indexComuna);
				if ($comuna->id_ciudad != $indexCiudad){
					return "La comuna no pertenece a esta ciudad";
				}
				$calle = RestauranteController::otraCalle($nombreCalle,$numeroCasa);
				$calleComuna = RestauranteController::otraCalleComuna($calle->id,$indexComuna);
				$restaurante->id_calle = $calle->id;
				$restaurante->save();
				return response()->json($restaurante);
			}
			else{
				$comuna = RestauranteController::otraComuna($nombreComuna,$indexCiudad);
				$calle = RestauranteController::otraCalle($nombreCalle,$numeroCasa);
				$calleComuna = RestauranteController::otraCalleComuna($calle->id,$comuna->id);
				$restaurante->id_calle = $calle->id;
				$restaurante->save();
				return response()->json($restaurante);
			}
		}
		else{
			$ciudad = new Ciudad();
			$ciudad->nombre = $nombreCiudad;
			$ciudad->save();
			$comuna = RestauranteController::otraComuna($nombreComuna,$ciudad->id);
			$calle = RestauranteController::otraCalle($nombreCalle,$numeroCasa);
			$calleComuna = RestauranteController::otraCalleComuna($calle->id,$comuna->id);
			$restaurante->id_calle = $calle->id;
			$restaurante->save();
			return response()->json($restaurante);
		}
	}
	public function mostrarRestaurante($id){
		if ($restaurante = Restaurante::find($id)){
			$ubicacionRestaurante = [];
			array_push($ubicacionRestaurante, $restaurante);
			$calle = Calle::find($restaurante->id_calle);
			array_push($ubicacionRestaurante, $calle);
			$calleComuna = Calle_Comuna::where('id_calle',$calle->id)->get();
			foreach( $calleComuna as $callesComunas){
				$comuna = Comuna::find($callesComunas->id_comuna);
				array_push($ubicacionRestaurante, $comuna);
				$ciudad = Ciudad::find($comuna->id_ciudad);
				array_push($ubicacionRestaurante, $ciudad);
				break;
			}
            
            /*$historial = new Historial();
            $historial::create([
                'actividad' => 'Mostrar',
                'descripcion' =>'Se muestra el restaurante '.$restaurante->nombre. '.',
                'fecha_actividad'=>now(),
                'id_usuario'=>$id,]);*/
			return response()->json($ubicacionRestaurante);




		}
		else{
			return "No se encuentra el restaurante";
		}
	}
	public function modificarRestaurante(Request $request, $id){
		if ($restaurante = Restaurante::find($id)){
			$ubicacionRestaurante = [];
            $restaurante->update($request->all());
			$restaurante->save();
			array_push($ubicacionRestaurante, $restaurante);
			$calle = Calle::find($restaurante->id_calle);
			array_push($ubicacionRestaurante, $calle);
			$calleComuna = Calle_Comuna::where('id_calle',$calle->id)->get();
			foreach( $calleComuna as $callesComunas){
				$comuna = Comuna::find($callesComunas->id_comuna);
				array_push($ubicacionRestaurante, $comuna);
				$ciudad = Ciudad::find($comuna->id_ciudad);
				array_push($ubicacionRestaurante, $ciudad);
				break;
			}
            /*$historial = new Historial();
            $historial::create([
                'actividad' => 'Actualizar',
                'descripcion' =>'Se actualiza informacion del restaurante '.$restaurante->nombre. '.',
                'fecha_actividad'=>now(),
                'id_usuario'=>$restaurante->id,]);*/

			return response()->json($ubicacionRestaurante);

		}
		else{
			return "No se encuentra el restaurante";
		}
	}
	public function eliminarRestaurante($id){
		if ($restaurante = Restaurante::find($id)){
            $idCalle = $restaurante->id_calle;
			$calle = Calle::find($idCalle);
			$restaurante ->delete();
			$calle ->delete();
            $historial = new Historial();
            /*$historial::create([
                'actividad' => 'Eliminar',
                'descripcion' =>'Se elimina el '.$restaurante->nombre. '.',
                'fecha_actividad'=>now(),
                'id_usuario'=>$restaurante->id,]);*/
			return "Eliminado restaurante con su calle!";
		}
		else{
			return "No existe el restaurante";
		}
	}
}
