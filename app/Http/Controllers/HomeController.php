<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Comuna;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('home', compact('ciudades', 'comunas'));
    }
}
