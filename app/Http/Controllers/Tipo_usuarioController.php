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
	return Tipo_usuario::all();
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
    public function store(Tipo_usuarioRequest $request)
    {
        return Tipo_usuario::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tipo_usuario::findOrFail($id);
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
    public function update(Tipo_usuarioRequest $request, $id)
    {
        $tipo_usuario = Tipo_usuario::findOrFail($id);
        $tipo_usuario->fill($request->all());
        $tipo_usuario->save();
        return $tipo_usuario;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historial = Historial::findOrFail($id);
        $historial ->delete();
        return 'eliminado';
    }
}
