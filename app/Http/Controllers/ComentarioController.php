<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Http\Requests\ComentarioRequest;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentario = Comentario::all();
        return response()->json($comentario);

    }

    public function mostrarComentarioUsuario($id_usuario){

        if($comentario = Comentario::find($id_usuario)){
            $comentario = Comentario::where('id_usuario',$id_usuario)->get();
            return response()->json($comentario);

        }else{

            return "No se encuentra usuario.";
        }

    }


    public function mostrarComentarioRestaurante($id_restaurante){

        if($comentario = Comentario::find($id_restaurante)){
            $comentario = Comentario::where('id_restaurante',$id_restaurante)->get();
            return response()->json($comentario);

        }else{

            return "No se encuentra restaurante.";
        }

    }





    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $valoracion = $request->input('valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $comentario = new Comentario();
            $comentario->mensaje = $request->input('mensaje');
            $comentario->valoracion = $request->input('valoracion');
            $comentario->fecha = $request->input('fecha');
            if(($comentario->fecha)>now()){
                return "Error, fecha incorrecta.";

            }
            $comentario->id_usuario = $request->input('id_usuario');
            $comentario->id_restaurante = $request->input('id_restaurante');

            $comentario->save();
            return response()->json($comentario);
        }
        else{
            return "Error parametros de entradas";
        }


    }

    public function show($id)
    {
        $comentario  = Comentario::find($id);
        return response()->json($comentario);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $valoracion = $request->input('valoracion');

        if((is_numeric($valoracion)) && ($valoracion > 0) && ($valoracion < 6)){
            $comentario  = Comentario::find($id);
            $comentario->mensaje = $request->input('mensaje');
            $comentario->valoracion = $request->input('valoracion');
            $comentario->fecha = $request->input('fecha');
            if(($comentario->fecha)>now()){
                return "Error, fecha no puede superar fecha actual.";

            }
            $comentario->id_usuario = $request->input('id_usuario');
            $comentario->id_restaurante = $request->input('id_restaurante');

            $comentario->save();
            return response()->json($comentario);
        }
        else{
            return "Error parametros de entradas";
        }

    }

    public function destroy($id)
    {
        $comentario  = Comentario::find($id);
        $comentario ->delete();
        return "Eliminado";

    }

    public function agregarComentario(Request $request, $id)
    {
        $comentario = new Comentario();
        $comentario->mensaje = $request->input('mensaje');
        $comentario->valoracion = $request->input('valoracion');
        $comentario->fecha = now();
        $comentario->id_usuario = $id;
        $comentario->id_restaurante = $request->input('id_restaurante');
        $comentario->save();
        return redirect('/MiPerfil');
    }
}
