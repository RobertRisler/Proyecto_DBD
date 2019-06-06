<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Http\Requests\PagoRequest;

class PagoController extends Controller
{
<<<<<<< HEAD
    //
	public function index()
    {
        return Pago::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
    public function index()
    {

        $pago = Pago::all();
        return response()->json($pago);

    }

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    public function create()
    {
        //
    }
<<<<<<< HEAD
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagoRequest $request)
    {
        return Pago::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pago::findOrFail($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

    public function store(Request $request)
    {

        $pago = new Pago();
        $pago->tipo = $request->input('tipo');
        $pago->monto = $request->input('monto');
        $pago->fecha = $request->input('fecha');


        $pago->save();
        return response()->json($pago);


    }

    public function show($id)
    {

        $pago = Pago::find($id);
        return response()->json($pago);
    }

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    public function edit($id)
    {
        //
    }
<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagoRequest $request, $id)
    {
        $pago = Pago::findOrFail($id);
        $pago->fill($request->all());
        $pago->save();
        return $pago;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago = Pago::findOrFail($id);
        $pago ->delete();
        return 'eliminado';
=======

    public function update(Request $request, $id)
    {

        $pago = Pago::find($id);
        $pago->tipo = $request->input('tipo');
        $pago->monto = $request->input('monto');
        $pago->fecha = $request->input('fecha');


        $pago->save();
        return response()->json($pago);
    }

    public function destroy($id)
    {
        $pago = Pago::find($id);
        $pago ->delete();
        return "Eliminado";


>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    }
}
