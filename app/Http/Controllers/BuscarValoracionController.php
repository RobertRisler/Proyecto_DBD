<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Direccion;
use App\Calle;
use App\Menu;
use App\Menu_Restaurante;
use App\Categoria;
use App\Restaurante;
use Auth;


class BuscarValoracionController extends Controller
{

	public function showName(Request $request){

		$query = $request->get('query');

		
		$restaurantes = DB::table('restaurantes')
						->where('nombre', 'ilike', '%' .$query. '%')
						->paginate(6);

		return view('vistaBuscarRestauranteV')->with('restaurantes', $restaurantes);

	}

	public function showValoration(Request $request){

		$query = $request->get('query');

		
		$restaurantes = DB::table('restaurantes')
						->where('promedio_valoracion', 'ilike', '%' .$query. '%')
						->paginate(6);

		return view('vistaBuscarRestauranteN')->with('restaurantes', $restaurantes);

	}

	public function showCategory(Request $request){

		$query = $request->get('query');

		$restaurantes = DB::table('restaurantes')
						->where('nombre', 'ilike', '%' .$query. '%')
						->paginate(6);

		return view('vistaBuscarRestauranteC')->with('restaurantes', $restaurantes);

	}

}