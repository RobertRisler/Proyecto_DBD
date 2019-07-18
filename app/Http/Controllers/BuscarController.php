<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Direccion;
use App\Calle;
use App\Producto;
use Auth;


class BuscarController extends Controller
{

	public function search(Request $request){

		$query = $request->get('query');

		
		$productos = DB::table('productos')
						->where('nombre', 'ilike', '%' .$query. '%')
						->orWhere('tipo', 'ilike', '%' .$query. '%')
						->paginate(6);

		return view('vistaBuscar')->with('productos', $productos);



	}







}