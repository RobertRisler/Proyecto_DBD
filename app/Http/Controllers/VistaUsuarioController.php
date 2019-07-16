<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Direccion;
use App\Calle;
use App\Pedido;
use App\Reserva;
use Auth;

class VistaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $direcciones = (Direccion::all())->where('id_usuario', $user->id);

        $pedidos = (Pedido::all())->where('id_usuario', $user->id);
        $reservas = (Reserva::all())->where('id_usuario', $user->id);

        return view('vistaUsuarios', compact('user', 'direcciones', 'pedidos', 'reservas'));
    }
}