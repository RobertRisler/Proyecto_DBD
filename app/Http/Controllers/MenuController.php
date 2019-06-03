<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return response()->json($menu);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->nombre = $request->input('nombre');
        $menu->descripcion = $request->input('descripcion');
        $menu->cantidad_productos = $request->input('cantidad_productos');
        $menu->id_categoria = $request->input('id_categoria');


        $menu->save();
        return response()->json($menu);

    }

    public function show($id)
    {
        $menu = Menu::find($id);
        return response()->json($menu);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->nombre = $request->input('nombre');
        $menu->descripcion = $request->input('descripcion');
        $menu->cantidad_productos = $request->input('cantidad_productos');
        $menu->id_categoria = $request->input('id_categoria');


        $menu->save();
        return response()->json($menu);


    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu ->delete();
        return "Eliminado";

    }
}
