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
        $numeroProductos = $request->input('cantidad_productos');

        if((is_numeric($numeroProductos)) && $numeroProductos >= 0){

            $menu = new Menu();
            $menu->nombre = $request->input('nombre');
            $menu->descripcion = $request->input('descripcion');
            $menu->cantidad_productos = $request->input('cantidad_productos');
            $menu->id_categoria = $request->input('id_categoria');


            $menu->save();
            return response()->json($menu);
        }
        else{
            return "Error parametros de entradas";
        }

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
        $numeroProductos = $request->input('cantidad_productos');

        if((is_numeric($numeroProductos)) && $numeroProductos >= 0){
            $menu = Menu::find($id);
            $menu->nombre = $request->input('nombre');
            $menu->descripcion = $request->input('descripcion');
            $menu->cantidad_productos = $request->input('cantidad_productos');
            $menu->id_categoria = $request->input('id_categoria');


            $menu->save();
            return response()->json($menu);
        }
        else{
            return "Error parametros de entradas";
        }


    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu ->delete();
        return "Eliminado";

    }
}
