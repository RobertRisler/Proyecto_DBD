<?php

namespace App\Http\Controllers;
use App\Menu_Producto;
use App\Menu;
use App\Producto;
use Illuminate\Http\Request;

class MenuProductoController extends Controller
{
    public function index()
    {
        $menuProducto = Menu_Producto::all();
        return response()->json($menuProducto);

    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $menuProducto = new Menu_Producto();
        $menuProducto->id_menu = $request->input('id_menu');
        $menuProducto->id_producto = $request->input('id_producto');
        $menuProducto->save();
        return response()->json($menuProducto);
    }
    public function show($id)
    {
        $menuProducto = Menu_Producto::find($id);
        return response()->json($menuProducto);

    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $menuProducto = Menu_Producto::find($id);
        $menuProducto->id_menu = $request->input('id_menu');
        $menuProducto->id_producto = $request->input('id_producto');
        $menuProducto->save();
        return response()->json($menuProducto);
    }
    public function destroy($id)
    {
        $menuProducto = Menu_Producto::find($id);
        $menuProducto ->delete();
        return "Eliminado!";
    }
	public function agregarProducto(Request $request, $id){
		if($menu = Menu::find($id)){
			$producto = new Producto();
			$producto->nombre = $request->input('nombre');
			$producto->descripcion = $request->input('descripcion');
			$producto->precio_total = $request->input('precio_total');
			$producto->tipo = $request->input('tipo');
			$producto->disponibilidad = $request->input('disponibilidad');
			$producto->save();
			$menuProducto = new Menu_Producto();
			$menuProducto->id_menu = $id;
			$menuProducto->id_producto = $producto->id;
			$menuProducto->save();
			return response()->json($producto);
		}
		else{
			return "No se encuentra el menu";
		}
	}
	public function mostrarProductos($id){
		if($menu = Menu::find($id)){
			$menuProductos = Menu_Producto::where('id_menu',$id)->get();
			$productos = [];
			foreach ($menuProductos as $menuProducto){
				if($producto = Producto::find($menuProducto->id_producto)){
					array_push($productos,$producto);
				}
			}
			return response()->json($productos);
		}
		else{
			return "No se encuentra el menu";
		}
	}
	public function cambiarProducto(Request $request, $id_menu, $id_producto){
		$id = -1;
		$menuProducto = Menu_Producto::all();
		foreach ($menuProducto as $productos){
			if (($productos->id_menu == $id_menu) && ($productos->id_producto == $id_producto)){
				$id = $productos->id;
				break;
			}
		}
		if ($id > -1){
			$producto = Producto::find($id_producto);
			$producto->nombre = $request->input('nombre');
			$producto->descripcion = $request->input('descripcion');
			$producto->precio_total = $request->input('precio_total');
			$producto->tipo = $request->input('tipo');
			$producto->disponibilidad = $request->input('disponibilidad');
			$producto->save();
			return response()->json($producto);
		}
		else{
			return "No existe el producto en el menu";
		}
	}
	public function eliminarProducto($id_menu, $id_producto){
		$id = -1;
		$menuProductos = Menu_Producto::all();
		foreach ($menuProductos as $productos){
			if (($productos->id_menu == $id_menu) && ($productos->id_producto == $id_producto)){
				$id = $productos->id;
				break;
			}
		}
		if ($id > -1){
			$producto = producto::find($id_producto);
			$producto ->delete();
			return "Eliminado!";
		}
		else{
			return "No se pudo eliminar el producto";
		}
	}
}
