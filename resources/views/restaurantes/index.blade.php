<!doctype html>
<html>

@extends('navbar')

   



<div class="row">
    <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Administrar restaurantes</h1>
    </div>
    <div class="col-md-6" style="  margin-top: 80px;">
        <form action="{{ route('searchRestaurante') }}" method="GET" class="search-form">
            <div class="input-group">
                <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar restaurantes por valoración o por nombre" required>
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Buscar restaurantes</button>
                </span>
            </div>
        </form>
    </div>

</div>
<table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Nombre restaurante</th>
                        <th>Descripcion</th>
                        <th>Promedio valoración</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($restaurantes as $restaurante)
                        <tr>
                            <th>{{ $restaurante->nombre }}</th>
                            <th>{{ $restaurante->descripcion }}</th>
                            <th>{{ $restaurante->promedio_valoracion }}</th>
                            <td>
                                
                                  <a class="btn btn-sm btn-success" href="{{route('restaurante.show',$restaurante->id)}}">Mostrar</a>
                                  <a class="btn btn-sm btn-warning" href="{{route('restaurante.edit',$restaurante->id)}}">Editar</a>
                                  <form action="{{route ('restaurante.destroy', $restaurante->id)}}" method="POST">
                                  {{csrf_field()}}
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
   </table>
                {!! $restaurantes->render() !!}

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









