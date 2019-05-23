<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;
use App\Http\Requests\RestauranteRequest;

class RestauranteController extends Controller
{
    //
	public function index()
    {
        return Restaurante::all();
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
    public function store(RestauranteRequest $request)
    {
        return Restaurante::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Restaurante::findOrFail($id);
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
    public function update(RestauranteRequest $request, $id)
    {
        $restaurante = Restaurante::findOrFail($id);
        $restaurante->fill($request->all());
        $restaurante->save();
        return $restaurante;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurante = Restaurante::findOrFail($id);
        $restaurante ->delete();
        return 'eliminado';
    }
}
