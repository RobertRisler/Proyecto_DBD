<!doctype html>
<html>

@extends('navbar')



<div class="row">
    <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Administrar usuarios</h1>
    </div>
    <div class="col-md-6" style="  margin-top: 80px;">
        <form action="{{ url('usuario') }}" method="GET" class="search-form">
            <div class="input-group">
                <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar usuarios" required>
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Buscar usuario</button>
                </span>
            </div>
        </form>
    </div>

</div>
<table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Nombre Usuario</th>
                        <th>Apellido</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <th>{{ $usuario->nombre }}</th>
                            <th>{{ $usuario->apellido }}</th>
                            <td>
                                
                                  <a class="btn btn-sm btn-success" href="{{route('usuario.show',$usuario->id)}}">Mostrar</a>
                                  <a class="btn btn-sm btn-warning" href="{{route('usuario.edit',$usuario->id)}}">Editar</a>
                                  <form action="{{route ('usuario.destroy', $usuario->id)}}" method="POST">
                                  {{csrf_field()}}
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
   </table>
                {!! $usuarios->render() !!}

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>









