<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_usuario;
use App\Http\Requests\Tipo_usuarioRequest;

class Tipo_usuarioController extends Controller
{
    //
	public function index()
    {
        $tipo_usuario = Tipo_usuario::all();
        return response()->json($tipo_usuario);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_usuario = new Tipo_usuario();
        $tipo_usuario->nombre = $request->input('nombre');

        $tipo_usuario->save();
        return response()->json($tipo_usuario);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_usuario = Tipo_usuario::find($id);
        return response()->json($tipo_usuario);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_usuario = Tipo_usuario::find($id);
        $tipo_usuario->nombre = $request->input('nombre');

        $tipo_usuario->save();
        return response()->json($tipo_usuario);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_usuario = Tipo_usuario::find($id);
        $tipo_usuario ->delete();
        return 'eliminado';
    }
}
