<!doctype html>
<html>
    
@extends('navbar')

    <div class="row">
        <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Realizar una reservación</h1>
    </div>

    <div class="col-md-6 center" style="margin-top: 80px;">
         


            <strong>Restaurantes</strong>
                <select class="browser-default custom-select custom-select-lg mb-3" id="select-restaurantes" name="restaurante" required="">
                      <option value= "" disabled="">Elige una opción</option>
                       @foreach ($restaurantes as $restaurante)

                                <option value="{{ $restaurante->id }}" selected>

                                  {{$restaurante->nombre }}
                                </option>

                        @endforeach
                      
                </select>
               

                <form method="POST" action="{{ url('/reservaCreate') }}">
                @csrf


            <strong>Elige una mesa con la cantidad de asientos requeridas</strong>
                <select class="browser-default custom-select custom-select-lg mb-3" id="select-mesas" name="cantidad_personas" required="">
                      <option value= "">Elige una opción</option>
                       
                      
                </select>


                

                <strong>Indique horarios disponibles de reservación</strong>
                <select class="browser-default custom-select custom-select-lg mb-3" id="select-horarios" name="id_horario_mesa" required="">
                      <option value= "">Elige una opción</option>
                       
                      
                </select>


                <strong>Rut del cliente (Sin puntos ni guión)</strong>
                <input type="numeric" name="rut_cliente" class="form-control" value=""  required>

                <strong>Nombre del cliente</strong>
                <input type="text" name="nombre_cliente" class="form-control" value=""  required>

                <strong>Apellido del cliente</strong>
                <input type="text" name="apellido_cliente" class="form-control" value=""  required>

                <strong>Indique fecha de reservación (Ej: 2019-07-22)</strong>
                <input type="text" name="fecha_resevacion" class="form-control" value=""  required>

                
                
                 <input id="estado" name="estado" type="hidden" value="0" required="">


                @if(auth()->check())

                 <input id="id_usuario" name="id_usuario" type="hidden" value="{{$usuario->id}}">

                @else

                <strong>Seleccione de parte de que usuario esta realizando la reserva</strong>
                <select class="browser-default custom-select custom-select-lg mb-3"  name="id_usuario" required="">
                       @foreach ($usuarios as $usuario)

                                <option value="{{ $usuario->id }}" selected>

                                  {{$usuario->nombre }}
                                </option>

                        @endforeach
                       
                      
                </select>




                @endif


                
                <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Guardar datos') }}
                                    </button>
                                </div>
                            </div>

            </form>


                



    </div>



    </div>

        
        
                           
                 
    </body>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="/js/edit.js"></script>
<script src="/js/edit1.js"></script>
<script src="/js/edit3.js"></script>





</html>



