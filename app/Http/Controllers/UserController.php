<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_usuario;
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


    }

    public function store(Request $request)
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


    public function mostrarReservasUsuario($id){



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

        if($users = User::find($id)){
            $users->nombre = $request->input('nombre');
            $users->apellido = $request->input('apellido');
            $users->correo = $request->input('correo');
            $users->contrasena = $request->input('contrasena');
            $users->id_tipo_usuario = $request->input('id_tipo_usuario');
            $users->save();
            return response()->json($users);

        }else{
            return "No se encuentra usuario para ser modificado.";

        }



    }



    public function destroy($id)//Elimina uno en especifico
    {
        if($users = User::find($id)) {
            $users->delete();
            return "Eliminado!";
        }else{
            return "No se pudo eliminar usuario.";
        }

    }
}
