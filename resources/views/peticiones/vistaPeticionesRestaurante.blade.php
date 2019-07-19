<!doctype html>
<html>

@extends('navbar')

   <div class="container">

<div class="row">
    <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Buscar Peticiones</h1>
    </div>
    <div class="col-md-6" style="  margin-top: 80px;">
        <form action="{{ route('searchPeticion') }}" method="GET" class="search-form">
            <div class="input-group">
                <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar peticiones por descripción" required>
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
            </div>
        </form>
    </div>
</div>


<!--FUNCIONA-->

<table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Validación</th>
                        <th>Accion</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticiones as $peticione)
                        <tr>
                            <th>{{ $peticione->id }}</th>
                            <th>{{ $peticione->descripcion }}</th>
                            @if ($peticione->validacion=="1")
                            <td>Aceptado</td>
                            @else
                            <td>Aún no aceptado</td>
                            @endif
                            <th>
                                @if ($peticione->validacion=="1")
                                <a class="btn btn-sm btn-warning disabled"  href="{{route('peticion.edit',$peticione->id)}}">Editar</a>

                                @else
                                <a class="btn btn-sm btn-warning" href="{{route('peticion.edit',$peticione->id)}}">Editar</a>
                                @endif
                            </th>
                        </tr>
                    @endforeach
                </tbody>
   </table>
                {!! $peticiones->render() !!}
</div>


            

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









