<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Categoria;
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
            $menu->update($request->all());

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
	public function agregarMenu(Request $request, $id){
		if ($categoria = Categoria::find($id)){
			$menu = new Menu();
			$menu->nombre = $request->input('nombre');
            $menu->descripcion = $request->input('descripcion');
            $menu->cantidad_productos = $request->input('cantidad_productos');
            $menu->id_categoria = $id;
			$menu->save();
            return response()->json($menu);
		}
		else{
			return "No se ha encontrado la categoria para el menu";
		}
	}
	public function mostrarMenus($id){
		if ($categoria = Categoria::find($id)){
			$menu = Menu::where('id_categoria',$id)->get();
            return response()->json($menu);
		}
		else{
			return "No se ha encontrado la categoria";
		}
	}
	public function modificarMenu(Request $request, $id_categoria, $id_menu){
		if (($menu = Menu::find($id_menu))&&($menu->id_categoria == $id_categoria)){
			$menu->update($request->all());

			$menu->save();
			return response()->json($menu);
		}
		else{
			return "No existe el menu con esa categoria";
		}
	}
	public function eliminarMenu($id_categoria, $id_menu){
		if (($menu = Menu::find($id_menu))&&($menu->id_categoria == $id_categoria)){
			$menu ->delete();
			return "Eliminado";
		}
		else{
			return "No existe el menu";
		}
	}
}