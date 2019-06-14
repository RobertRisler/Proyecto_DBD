<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    //
	public function index()
    {
        $producto = Producto::all();
        return response()->json($producto);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $precio = $request->input('precio_total');

        if((is_numeric($precio)) && $precio >= 0){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio_total = $request->input('precio_total');
        $producto->tipo = $request->input('tipo');
        $producto->disponibilidad = $request->input('disponibilidad');

        $producto->save();
        return response()->json($producto);
        }
        else{
            return "Error parametros de entradas";
        }
    }

    public function show($id)
    {

        $producto = Producto::find($id);
        return response()->json($producto);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $precio = $request->input('precio_total');

        if((is_numeric($precio)) && $precio >= 0){
        $producto = Producto::find($id);
        $producto->update($request->all());


        $producto->save();
        return response()->json($producto);
        }
        else{
            return "Error parametros de entradas";
        }

    }

    public function destroy($id)
    {

        $producto = Producto::find($id);
        $producto ->delete();
        return "Eliminado!";

    }
}
