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

            $direcciones = Direccion::all()->where('id_usuario', $usuario->id);

            $calles = Calle::all();

            $pedidos = Pedido::all()->where('id_usuario', $usuario->id);
            $reservas = Reserva::all()->where('id_usuario', $usuario->id);

            return view('vistaUsuarios', compact('usuario', 'direcciones', 'calles', 'pedidos', 'reservas'));
        }
        else
        {
            return redirect('/login');
        }
        
    }

    public static function CalleDireccion($direccion)
    {
        $calle = Calle::find($direccion->id_calle);
        return $calle;
    }

    public static function ComunaCalle($direccion)
    {
        $calle = Calle::find($direccion->id_calle);
        $calle_comuna = Calle_Comuna::all()->where('id_calle', $calle->id)->first->id;
        $comuna = Comuna::find($calle_comuna->id_comuna);
        return $comuna;
    }

    public static function RestaurantPedido($pedido)
    {
        
    }

    public static function HorariosReserva($reserva)
    {

    }
}