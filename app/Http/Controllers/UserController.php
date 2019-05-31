<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
	public function index()//Los muestra todos
    {
        $users = User::all();
        return response()->json($users);
    }


    public function create(Request $request)//crea un recurso
    {
        $users = new User();
        $users->nombre = $request->input('nombre');
        $users->apellido = $request->input('apellido');
        $users->correo = $request->input('correo');
        $users->contrasena = $request->input('contrasena');
        $users->id_tipo_usuario = $request->input('id_tipo_usuario');

        $users->save();
        return response()->json($users);

    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }



    public function show($id)//muestra segun el $id
    {

        $users = User::find($id);
        return response()->json($users);


    }



    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)//actualiza uno en especifico
    {

        $users = User::find($id);
        $users->nombre = $request->input('nombre');
        $users->apellido = $request->input('apellido');
        $users->correo = $request->input('correo');
        $users->contrasena = $request->input('contrasena');
        $users->id_tipo_usuario = $request->input('id_tipo_usuario');
        $users->save();
        return response()->json($users);

    }



    public function destroy($id)//Elimina uno en especifico
    {
        $users = User::find($id);
        $users ->delete();
        return "Eliminado!";


    }
}
