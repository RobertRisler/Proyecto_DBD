<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Comuna;
use App\User;
use Auth;
use App\Restaurante;

class PaginaPrincipalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        

        $ciudades= Ciudad::all();
        $comunas= Comuna::all();
        $restaurantes = Restaurante::all();
        return view('index', compact('ciudades', 'comunas','restaurantes'));
    }


    

}
