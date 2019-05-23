<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;
use App\Http\Requests\HistorialRequest;

class HistorialController extends Controller
{
    //
	public function index()
    {
        return Historial::all();
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
    public function store(HistorialRequest $request)
    {
        return Historial::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Historial::findOrFail($id);
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
    public function update(HistorialRequest $request, $id)
    {
        $historial = Historial::findOrFail($id);
        $historial->fill($request->all());
        $historial->save();
        return $historial;
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
