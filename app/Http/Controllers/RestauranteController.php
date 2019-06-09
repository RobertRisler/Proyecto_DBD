<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
use App\Mesa;
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
        $valoracion = $request->input('promedio_valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $restaurante = Restaurante::find($id);
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
            $mesa->id_reserva = $request->input('id_reserva');
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
}
