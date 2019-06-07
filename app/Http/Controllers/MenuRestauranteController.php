<?php

namespace App\Http\Controllers;
use App\MenuRestaurante;
use Illuminate\Http\Request;

class MenuRestauranteController extends Controller
{
    public function index()
    {

        $menuRestaurante = MenuRestaurante::all();
        return response()->json($menuRestaurante);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {




        $menuRestaurante = new MenuRestaurante();
        $menuRestaurante->id_menu = $request->input('id_menu');
        $menuRestaurante->id_restaurante = $request->input('id_restaurante');
        $menuRestaurante->save();
        return response()->json($menuRestaurante);


    }

    public function show($id)
    {

        $menuRestaurante = MenuRestaurante::find($id);
        return response()->json($menuRestaurante);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $menuRestaurante = MenuRestaurante::find($id);
        $menuRestaurante->id_menu = $request->input('id_menu');
        $menuRestaurante->id_restaurante = $request->input('id_restaurante');
        $menuRestaurante->save();
        return response()->json($menuRestaurante);

    }

    public function destroy($id)
    {

        $menuRestaurante = MenuRestaurante::find($id);
        $menuRestaurante ->delete();
        return "Eliminado!";

    }
}
