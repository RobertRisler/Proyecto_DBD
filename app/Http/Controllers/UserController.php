<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_usuario;
use App\Historial;
use App\Comentario;
use App\Restaurante;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
	public function index()//Los muestra todos
    {
        $users = User::all();
        return response()->json($users);
    }
    /*Muesta el historial de un usuario $id_usuario*/
    public function mostrarHistorial($id_usuario)
    {
        if($historiales = Historial::find($id_usuario)) {
            $historiales = Historial::where('id_usuario', $id_usuario)->get();
            return response()->json($historiales);
        }else{
            return "No se encuentra usuario.";
        }
    }
    /*public function mostrarComentarios($id_usuario)
    {
        if($usuario = User::find($id_usuario)) {
            
            $usuario = User::find($id_usuario);
            $comentarios = $usuario->comentarios()->get();
            return $comentarios;
        }else{
            return "No se encuentra el pedido.";
        }
    }*/
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
            return "No se pudo eliminar usuario";
        }
    }
	public function agregarComentario(Request $request, $id_usuario, $id_restaurante){
		if($users = User::find($id_usuario)){
			if ($restaurante = Restaurante::find($id_restaurante)){
				$comentario = new Comentario();
				$comentario->mensaje = $request->input('mensaje');
				$comentario->valoracion = $request->input('valoracion');
				$comentario->fecha = $request->input('fecha');
				if(($comentario->fecha)>now()){
					return "Error, fecha no puede superar fecha actual.";
				}
				$comentario->id_usuario = $id_usuario;
				$comentario->id_restaurante = $id_restaurante;
				$comentario->save();
				return response()->json($comentario);
			}
			else{
				return "No se encuentra el restaurante para comentar";
			}
		}
		else{
			return "No se encuentra el usuario";
		}
	}
	public function mostrarComentarios($id_usuario, $id_restaurante){
		if($users = User::find($id_usuario)){
			if ($restaurante = Restaurante::find($id_restaurante)){
				if ($comentario = Comentario::where('id_usuario',$id_usuario)->
				where('id_restaurante',$id_restaurante)->get()){
					return response()->json($comentario);
				}
				else{
					return "El usuario no ha realizado ningun comentario en el restaurante";
				}
			}
			else{
				return "No existe el restaurante";
			}
		}
		else{
			return "No existe el usuario";
		}
	}
	public function mostrarTotalComentarios($id){
		if($users = User::find($id)){
			$comentario = Comentario::where('id_usuario',$id)->get();
			return response()->json($comentario);
		}
		else{
			return "No existe el usuario";
		}
	}
	public function modificarComentario(Request $request, $id_usuario, $id_restaurante, $id_comentario){
		if ($comentario = Comentario::find($id_comentario)){
			if (($comentario->id_usuario == $id_usuario)&&($comentario->id_restaurante == $id_restaurante)){
				$comentario->mensaje = $request->input('mensaje');
				$comentario->valoracion = $request->input('valoracion');
				$comentario->fecha = $request->input('fecha');
				if(($comentario->fecha)>now()){
					return "Error, fecha no puede superar fecha actual.";
				}
				$comentario->id_usuario = $id_usuario;
				$comentario->id_restaurante = $id_restaurante;
				$comentario->save();
				return response()->json($comentario);
			}
			else{
				return "No se puede modificar el comentario";
			}
		}
		else{
			return "No existe el comentario";
		}
		/*if($users = User::find($id_usuario)){
			if ($restaurante = Restaurante::find($id_restaurante)){
				if ($comentario = Comentario::where('id_usuario',$id_usuario)->
				where('id_restaurante',$id_restaurante)->get()){
					$comentario->mensaje = $request->input('mensaje');
					$comentario->valoracion = $request->input('valoracion');
					$comentario->fecha = $request->input('fecha');
					if(($comentario->fecha)>now()){
						return "Error, fecha no puede superar fecha actual.";
					}
					$comentario->id_usuario = $id_usuario;
					$comentario->id_restaurante = $id_restaurante;
					$comentario->save();
					return response()->json($comentario);
				}
				else{
					return "El usuario no ha realizado ningun comentario en el restaurante";
				}
			}
			else{
				return "No existe el restaurante";
			}
		}
		else{
			return "No existe el usuario";
		}*/
	}
	public function eliminarComentario ($id_usuario, $id_restaurante, $id_comentario){
		if($comentario = Comentario::find($id_comentario)){
			if (($comentario->id_usuario == $id_usuario)&&($comentario->id_restaurante == $id_restaurante)){
				$comentario->delete();
				return "Eliminado!";
			}
			else{
				return "No se puede eliminar el comentario";
			}
		}
		else{
			return "No existe el comentario";
		}
	}
}
