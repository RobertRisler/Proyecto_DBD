<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
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
            $categorias = Categoria::all();

            return view('vistaUsuarios', compact('usuario', 'categorias'));
        }
        else
        {
            return redirect('/login');
        }   
    }
}