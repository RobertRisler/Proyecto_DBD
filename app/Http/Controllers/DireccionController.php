<?php

namespace App\Http\Controllers;

use App\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    //
    public function index()//Los muestra todos
    {
        $direccion = Direccion::all();
        return response()->json($direccion);
    }


    public function create(Request $request)//crea un recurso
    {


    }

    public function store(Request $request)
    {
        $direccion = new Direccion();
        $direccion->alias = $request->input('alias');
        $direccion->id_usuario = $request->input('id_usuario');
        $direccion->id_calle = $request->input('id_calle');

        $direccion->save();
        return response()->json($direccion);
    }



    public function show($id)//muestra segun el $id
    {

        $direccion = Direccion::find($id);
        return response()->json($direccion);


    }



    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)//actualiza uno en especifico
    {

        $direccion = Direccion::find($id);
        $direccion->alias = $request->input('alias');
        $direccion->id_usuario = $request->input('id_usuario');
        $direccion->id_calle = $request->input('id_calle');

        $direccion->save();
        return response()->json($direccion);

    }



    public function destroy($id)//Elimina uno en especifico
    {
        $direccion = Direccion::find($id);
        $direccion ->delete();
        return "Eliminado!";


    }
}
