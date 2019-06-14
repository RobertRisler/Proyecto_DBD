<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Menu;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    //
	public function index()
    {

        $categoria = Categoria::all();
        return response()->json($categoria);


    }

    public function mostrarMenuCategoria($id_menu)
    {

        if($menus = Menu::find($id_menu)) {
            $menus = Menu::where('id_categoria', $id_menu)->get();
            return response()->json($menus);
        }else{
            return "No se encuentra el menú solicitado";
        }


    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');

        $categoria->save();
        return response()->json($categoria);


    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return response()->json($categoria);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());


        $categoria->save();
        return response()->json($categoria);
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria ->delete();
        return 'Eliminado';
    }
}
