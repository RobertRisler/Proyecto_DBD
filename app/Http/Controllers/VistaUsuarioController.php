<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Direccion;
use App\Calle;
use App\Calle_Comuna;
use App\Comuna;
use App\Pedido;
use App\Restaurant;
use App\Reserva;
use Auth;

class VistaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
    {
        $this->middleware('auth');
    }
	 
    public function index()
    {
        if (Auth::check())
        {
            $usuario = User::find(Auth::user()->id);
            $comunas = Comuna::all();

            return view('vistaUsuarios', compact('usuario', 'comunas'));
        }
        else
        {
            return redirect('/login');
        }   
    }
}