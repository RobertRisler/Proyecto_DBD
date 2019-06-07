<?php

namespace App\Http\Controllers;
use App\MenuProducto;
use Illuminate\Http\Request;

class MenuProductoController extends Controller
{
    public function index()
    {

        $menuProducto = MenuProducto::all();
        return response()->json($menuProducto);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {




        $menuProducto = new MenuProducto();
        $menuProducto->id_menu = $request->input('id_menu');
        $menuProducto->id_producto = $request->input('id_producto');
        $menuProducto->save();
        return response()->json($menuProducto);


    }

    public function show($id)
    {

        $menuProducto = MenuProducto::find($id);
        return response()->json($menuProducto);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $menuProducto = MenuProducto::find($id);
        $menuProducto->id_menu = $request->input('id_menu');
        $menuProducto->id_producto = $request->input('id_producto');
        $menuProducto->save();
        return response()->json($menuProducto);

    }

    public function destroy($id)
    {

        $menuProducto = MenuProducto::find($id);
        $menuProducto ->delete();
        return "Eliminado!";

    }
}
