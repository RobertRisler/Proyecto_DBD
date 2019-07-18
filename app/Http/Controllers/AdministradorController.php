<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Direccion;
use Auth;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	
	 
    public function search(Request $request){

        $query = $request->get('query');

        
        $usuarios = DB::table('usuarios')
                        ->where('nombre', 'ilike', '%' .$query. '%')
                        ->orWhere('apellido', 'ilike', '%' .$query. '%')
                        ->paginate(5);

        return view('vistaAdministracionUsuario')->with('usuarios', $usuarios);



    }
}