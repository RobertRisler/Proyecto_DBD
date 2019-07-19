<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Mi perfil - YA-PEDIDOS</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
        <link rel="stylesheet" href="assets/css/select.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
        -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
        box-shadow:         1px 1px 3px 2px #cc1414;">
            <div class="container">
                <a href="/" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a>
                <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto"></ul>
                    @if(auth()->check())
                        @if((auth()->user()->id_tipo_usuario)=="2")<!--Si es tipo usuario-->
                            <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Bienvenido {{auth()->user()->nombre }}
                                </a>
                                <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="/MiPerfil">Mi perfil</a>
                                <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route ('logout') }}">
                                        {{csrf_field()}}
                                        <button class="btn btn-primary">Cerrar sesión</button>
                                    </form>
                        @elseif ((auth()->user()->id_tipo_usuario)=="1")<!--Si es tipo administrador-->
                            <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Bienvenido Administrador {{auth()->user()->nombre }}
                                </a>
                                <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="/usuario">Panel Administración</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/#">Administración</a>
                                <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route ('logout') }}">
                                {{csrf_field()}}
                                <button class="btn btn-primary">Cerrar sesión</button>
                            </form>

                        @else <!--Si es tipo restaurante-->
                            <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Bienvenido {{auth()->user()->nombre }}
                            </a>
                            <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="/MiPerfil">Mi perfil</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route ('logout') }}">
                                {{csrf_field()}}
                                <button class="btn btn-primary">Cerrar sesión</button>
                            </form>
                        @endif
                      </div>
                    </li>
                  @else
                    <li class="nav-item">
                      <a class="btn btn-primary" href="{{ url('login') }}">Inicia sesión</a>
                        <a class="btn btn-primary" href="{{ url('register') }}">Registrate</a>
                    </li>
                @endif
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        
                            <div class="card-title mb-4">
                                <div class="d-flex justify-content-start">
                                    <div class="userData ml-3">
                                        <br><br><br>
                                        <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Mi Perfil</h2>
                                    </div>
                                </div>
                            </div>

                            <!--Inicio información personal-->
                            <div class="row">
                                <div class="col-3">
                                    <ul class="list-group">
                                        <li class="list-group-item text">Información Personal</li>
                                        <li class="list-group-item text"><span class="pull-left">
                                            <strong>Nombre</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->nombre}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Apellido</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->apellido}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Email</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->correo}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Creación</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->created_at}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!--Fin información personal-->
                                
                                @if($usuario->id_tipo_usuario == "2") <!--Usuario común-->
                                    <div class="col-9">
                                        <!--Pestañas-->
                                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="misDirecciones-tab" data-toggle="tab" href="#misDirecciones" role="tab" aria-controls="misDirecciones" aria-selected="true">Mis direcciones</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="misPedidos-tab" data-toggle="tab" href="#misPedidos" role="tab" aria-controls="misPedidos" aria-selected="false">Mis pedidos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="misReservas-tab" data-toggle="tab" href="#misReservas" role="tab" aria-controls="misReservas" aria-selected="false">Mis reservas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar perfil</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content ml-1" id="myTabContent">
                                            <!--Inicio Mis direcciones-->
                                            <div class="tab-pane fade show active" id="misDirecciones" role="tabpanel" aria-labelledby="misDirecciones-tab">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label><strong>Alias</strong></label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><strong>Calle</strong></label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><strong>Número</strong></label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label><strong>Comuna</strong></label>
                                                    </div>

                                                    @foreach($usuario->direcciones as $direccion)
                                                        <div class="col-sm-3 text-muted">
                                                            <label>{{$direccion->alias}}</label>
                                                        </div>
                                                        <div class="col-sm-3 text-muted">
                                                            <label>{{$direccion->calles->nombre}}</label>
                                                        </div>
                                                        <div class="col-sm-3 text-muted">
                                                            <label>{{$direccion->calles->numero}}</label>
                                                        </div>
                                                        <div class="col-sm-3 text-muted">
                                                            <label>{{$direccion->calles->calles_comunas->first->id->comunas->nombre}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!--Fin Mis direcciones-->
                                        
                                            <!--Inicio Mis pedidos-->
                                            <div class="tab-pane fade" id="misPedidos" role="tabpanel" aria-labelledby="misPedidos-tab">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label><strong>Fecha</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Restaurant</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Valor</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Tipo</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Estado</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong></strong></label>
                                                    </div>

                                                    @foreach($usuario->pedidos as $pedido)
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$pedido->fecha}}</strong></label>
                                                        </div>

                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$pedido->restaurantes->nombre}}</strong></label>
                                                        </div>

                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$pedido->pagos->monto}}</strong></label>
                                                        </div>

                                                        @if($pedido->tipo_entrega == false) <!--Retiro-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Retiro</strong></label>
                                                            </div>

                                                            @if($pedido->estado == false) <!--No completado-->
                                                                <div class="col-sm-2 text-muted">
                                                                    <label><strong>Incompleto</strong></label>
                                                                </div>
                                                            @elseif($pedido->estado == true) <!--Completado-->
                                                                <div class="col-sm-2 text-muted">
                                                                    <label><strong>Completado</strong></label>
                                                                </div>
                                                            @endif

                                                        @elseif($pedido->tipo_entrega == true) <!--Despacho-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Despacho</strong></label>
                                                            </div>

                                                            @if($pedido->estado == false) <!--No entregado-->
                                                                <div class="col-sm-2 text-muted">
                                                                    <label><strong>Incompleto</strong></label>
                                                                </div>
                                                            @elseif($pedido->estado == true) <!--Entregado-->
                                                                <div class="col-sm-2 text-muted">
                                                                    <label><strong>Entregado</strong></label>
                                                                </div>
                                                            @endif
                                                        @endif

                                                        @if($pedido->estado == true)
                                                            <div class="col-sm-2">
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalComentar">
                                                                    Comentar
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="modalComentar" tabindex="-1" role="dialog" aria-labelledby="modalComentar" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <form action="{{ route('nuevoComentario', $usuario->id, $pedido->id_restaurante) }}" method="POST">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modelComentar">Comentario</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col">
                                                                                        <div class="row">
                                                                                            <label for="menus">Valoración</label>
                                                                                            <select class="form-control" id="categorias" name="valoracion">
                                                                                                <option>1</option>
                                                                                                <option>2</option>
                                                                                                <option>3</option>
                                                                                                <option>4</option>
                                                                                                <option>5</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Mensaje</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <textarea class="form-control" id="comentario" rows="3" placeholder="Comentario" name="mensaje"></textarea>
                                                                                            <input class="invisible" value="{{$pedido->id_restaurante}}" name="id_restaurante">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        @elseif($pedido->estado == false)
                                                            <div class="col-sm-2">
                                                                <label></label>
                                                            </div>
                                                        @endif

                                                    @endforeach
                                                </div>
                                            </div>
                                            <!--Fin Mis pedidos-->
                                        
                                            <!--Inicio Mis reservas-->
                                            <div class="tab-pane fade" id="misReservas" role="tabpanel" aria-labelledby="misReservas-tab">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label><strong>Fecha</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Hora inicio</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Hora fin</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Restaurant</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label><strong>Estado</strong></label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label></label>
                                                    </div>

                                                    @foreach($usuario->reservas as $reserva)
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$reserva->fecha_resevacion}}</strong></label>
                                                        </div>
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$reserva->horarios_mesas->hora_inicio}}</strong></label>
                                                        </div>
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$reserva->horarios_mesas->hora_fin}}</strong></label>
                                                        </div>
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>{{$reserva->horarios_mesas->mesas->restaurantes->nombre}}</strong></label>
                                                        </div>
                                                        @if($reserva->estado == false)
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Incompleta</strong></label>
                                                            </div>
                                                        @elseif($reserva->estado == true)
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Completada</strong></label>
                                                            </div>
                                                        @endif

                                                        @if($reserva->estado == true)
                                                            <div class="col-sm-2">
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalComentar2">
                                                                    Comentar
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="modalComentar2" tabindex="-1" role="dialog" aria-labelledby="modalComentar2" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <form action="{{ route('nuevoComentario', $usuario->id, $pedido->id_restaurante) }}" method="POST">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modelComentar2">Comentario</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col">
                                                                                        <div class="row">
                                                                                            <label for="menus">Valoración</label>
                                                                                            <select class="form-control" id="categorias" name="valoracion">
                                                                                                <option>1</option>
                                                                                                <option>2</option>
                                                                                                <option>3</option>
                                                                                                <option>4</option>
                                                                                                <option>5</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Mensaje</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <textarea class="form-control" id="comentario" rows="3" placeholder="Comentario" name="mensaje"></textarea>
                                                                                            <input class="invisible" value="{{$reserva->horarios_mesas->mesas->restaurantes->id}}" name="id_restaurante">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        @elseif($reserva->estado == false)
                                                            <div class="col-sm-2">
                                                                <label></label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div> 
                                            </div>
                                            <!--Fin Mis reservas-->

                                            <!--Inicio Editar perfil-->
                                            <div class="tab-pane fade text-center" id="editarPerfil" role="tabpanel" aria-labelledby="editarPerfil-tab">
                                                <div class="row mt-3">
                                                    <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                        <div class="col-sm-1 form-group mb-2">
                                                            <label>Nombre</label>
                                                        </div>
                                                        <div class="form-group mx-sm-5 mb-2">
                                                            <input type="text" class="form-control" placeholder="{{$usuario->nombre}}" name="nombre">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                    </form>

                                                    <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                        <div class="col-sm-1 form-group mb-2">
                                                            <label>Apellido</label>
                                                        </div>
                                                        <div class="form-group mx-sm-5 mb-2">
                                                            <input type="text" class="form-control" placeholder="{{$usuario->apellido}}" name="apellido">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                    </form>

                                                    <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                        <div class="col-sm-1 form-group mb-2">
                                                            <label>Correo</label>
                                                        </div>
                                                        <div class="form-group mx-sm-5 mb-2">
                                                            <input type="text" class="form-control" placeholder="{{$usuario->correo}}" name="correo">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--Fin Editar perfil-->

                                        </div>
                                    </div>
                                
                                @elseif($usuario->id_tipo_usuario == "3") <!--Restaurante-->
                                    <div class="col-9">
                                        @if($usuario->peticion === null)
                                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="ingresarPeticion-tab" data-toggle="tab" href="#ingresarPeticion" role="tab" aria-controls="ingresarPeticion" aria-selected="true">Ingresar petición</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar perfil</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content ml-1" id="contenidoRestaurante1">
                                                <!--Inicio Ingresar petición-->
                                                <div class="tab-pane fade show active" id="ingresarPeticion" role="tabpanel" aria-labelledby="ingresarPeticion-tab">
                                                    <div class="row center">
                                                        <form action="{{ route('nuevaPeticion', $usuario->id) }}" method="POST">
                                                            <div class="form-group">
                                                                <label for="descripcionPeticion">Realice una descripción de su local</label>
                                                                    <textarea class="form-control" id="descripcionPeticion" rows="8" placeholder="Descripción" name="descripcion"></textarea>
                                                                <small id="recordatorioDescripcion" class="form-text text-muted">Recuerde mencionar el nombre y la dirección de su local, incluyendo calle, número, comuna y ciudad donde se ubica</small>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Enviar petición</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--Fin ingresar petición-->

                                                <!--Inicio Editar perfil-->
                                                <div class="tab-pane fade text-center" id="editarPerfil" role="tabpanel" aria-labelledby="editarPerfil-tab">
                                                    <div class="row mt-3">
                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Nombre</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->nombre}}" name="nombre">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>

                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Apellido</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->apellido}}" name="apellido">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>

                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Correo</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->correo}}" name="correo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--Fin Editar perfil-->
                                            </div>

                                        @elseif($usuario->peticion->validacion === null || $usuario->peticion->validacion === false)
                                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="miPeticion-tab" data-toggle="tab" href="#miPeticion" role="tab" aria-controls="miPeticion" aria-selected="true">Mi petición</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar perfil</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content ml-1" id="contenidoRestaurante2">
                                                <!--Inicio Mi petición-->
                                                <div class="tab-pane fade show active" id="miPeticion" role="tabpanel" aria-labelledby="miPeticion-tab">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label><strong>La petición enviada es:</strong></label>
                                                        </div>
                                                        <div class="col-sm-12 text-muted">
                                                            <label>{{$usuario->peticion->descripcion}}</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label>El estado actual de la petición enviada es:</label>
                                                        </div>
                                                        @if($usuario->peticion->validacion === null)
                                                            <div class="col-sm-12 text-muted">
                                                                <label>Aun no revisada</label>
                                                            </div>
                                                        @elseif($usuario->peticion->validacion === false)
                                                            <div class="col-sm-12 text-muted">
                                                                <label>Rechazada</label>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--Fin Mi petición-->

                                                <!--Inicio Editar perfil-->
                                                <div class="tab-pane fade text-center" id="editarPerfil" role="tabpanel" aria-labelledby="editarPerfil-tab">
                                                    <div class="row mt-3">
                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Nombre</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->nombre}}" name="nombre">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>

                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Apellido</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->apellido}}" name="apellido">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>

                                                        <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                            <div class="col-sm-1 form-group mb-2">
                                                                <label>Correo</label>
                                                            </div>
                                                            <div class="form-group mx-sm-5 mb-2">
                                                                <input type="text" class="form-control" placeholder="{{$usuario->correo}}" name="correo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--Fin Editar perfil-->
                                            </div>
                                        @elseif($usuario->peticion->validacion == true)
                                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                                @if($usuario->peticion->id_restaurante === null)
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="miRestaurante-tab" data-toggle="tab" href="#miRestaurante" role="tab" aria-controls="miRestaurante" aria-selected="true">Mi restaurante</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar perfil</a>
                                                    </li>
                                                    </ul>

                                                    <div class="tab-content ml-1" id="contenidoRestaurante3">
                                                        <div class="tab-pane fade show active" id="miRestaurante" role="tabpanel" aria-labelledby="miRestaurante-tab">
                                                            <div class="col-sm-5">

                                                                <a class="btn btn-primary" href="/registroRestaurante" role="button">Ingresar restaurante</a>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="modalComentar3" tabindex="-1" role="dialog" aria-labelledby="modalComentar3" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <form action="{{ url('/restaurante/ubicacion') }}" method="POST">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modelComentar3">Comentario</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col">
                                                                                        <div class="row">
                                                                                            <label>Nombre</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Descripción</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <textarea class="form-control" id="comentario" rows="3" placeholder="Descripción" name="descripcion"></textarea>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Teléfono</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>¿Hace despacho?</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <select class="form-control" id="categorias" name="hace_despacho">
                                                                                                <option value="true">Si</option>
                                                                                                <option value="false">No</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Ciudad</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Nombre ciudad" name="nombre_ciudad">
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Comuna</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Nombre comuna" name="nombre_comuna">
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Calle</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Nombre calle" name="nombre_calle">
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <label>Número</label>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <input type="text" class="form-control" placeholder="Número casa" name="numero_casa">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                @else
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="miRestaurante-tab" data-toggle="tab" href="#miRestaurante" role="tab" aria-controls="miRestaurante" aria-selected="true">Mi restaurante</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="editarRestaurante-tab" data-toggle="tab" href="#editarRestaurante" role="tab" aria-controls="editarRestaurante" aria-selected="true">Editar restaurante</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="misMenus-tab" data-toggle="tab" href="#misMenus" role="tab" aria-controls="misMenus" aria-selected="true">Mis menús</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="misProductos-tab" data-toggle="tab" href="#misProductos" role="tab" aria-controls="misProductos" aria-selected="true">Mis productos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar perfil</a>
                                                    </li>
                                                    </ul>

                                                    <div class="tab-content ml-1" id="contenidoRestaurante3">
                                                        <!--Inicio Mi restaurante-->
                                                        <div class="tab-pane fade show active" id="miRestaurante" role="tabpanel" aria-labelledby="miRestaurante-tab">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label><strong>Nombre:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    <label>{{$usuario->peticion->restaurante->nombre}}</label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><strong>Descripción:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    <label>{{$usuario->peticion->restaurante->descripcion}}</label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><strong>Valoración actual:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    <label>{{$usuario->peticion->restaurante->promedio_valoracion}}</label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><strong>Teléfono:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    <label>{{$usuario->peticion->restaurante->telefono}}</label>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><strong>Despacho:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    @if($usuario->peticion->restaurante->hace_despacho == true)
                                                                        <label>Si</label>
                                                                    @elseif($usuario->peticion->restaurante->hace_despacho == false)
                                                                        <label>No</label>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label><strong>Dirección:</strong></label>
                                                                </div>
                                                                <div class="col-sm-9 text-muted">
                                                                    <label>{{$usuario->peticion->restaurante->calles->nombre}}, {{$usuario->peticion->restaurante->calles->numero}}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Fin Mi restaurante-->

                                                        <!--Inicio Editar menu-->
                                                        <div class="tab-pane fade" id="misMenus" role="tabpanel" aria-labelledby="misMenus-tab">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <label><strong>Nombre</strong></label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label><strong>Categoría</strong></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <label><strong>Descripción</strong></label>
                                                                </div>
                                                                @foreach($usuario->peticion->restaurante->menus as $menu)
                                                                    <div class="col-sm-2 text-muted">
                                                                        <label><strong>{{ $menu->nombre }}</strong></label>
                                                                    </div>
                                                                    <div class="col-sm-2 text-muted">
                                                                        <label><strong>{{ $menu->categorias->nombre }}</strong></label>
                                                                    </div>
                                                                    <div class="col-sm-8 text-muted">
                                                                        <label><strong>{{ $menu->descripcion }}</strong></label>
                                                                    </div>
                                                                @endforeach

                                                                <div class="col-sm-12">
                                                                    <!-- Button trigger modal -->
                                                                    <br>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                                        Agregar nuevo menú
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form action="{{ route('nuevoMenu', $usuario->peticion->restaurante->id) }}" method="POST">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo menú</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="col">
                                                                                            <div class="row">
                                                                                                <label>Nombre</label>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <label>Descripción</label>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control" placeholder="Descripción" name="descripcion">
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <label for="menus">Categoría</label>
                                                                                                <select class="form-control" id="categorias" name="id_categoria">
                                                                                                    @foreach($categorias as $categoria)
                                                                                                        <option value="{{$categoria->id}}">{{ $categoria->nombre }}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 

                                                            </div>
                                                        </div>
                                                        <!--Fin Editar menu-->

                                                        <!--Inicio Editar producto-->
                                                        <div class="tab-pane fade" id="misProductos" role="tabpanel" aria-labelledby="misProductos-tab">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <label><strong>Nombre</strong></label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label><strong>Valor</strong></label>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label><strong>Menú</strong></label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <label><strong>Descripción</strong></label>
                                                                </div>
                                                                @foreach($usuario->peticion->restaurante->menus as $menu)
                                                                    @foreach($menu->productos as $producto)
                                                                        <div class="col-sm-3 text-muted">
                                                                            <label><strong>{{ $producto->nombre }}</strong></label>
                                                                        </div>
                                                                        <div class="col-sm-2 text-muted">
                                                                            <label><strong>{{ $producto->precio_total }}</strong></label>
                                                                        </div>
                                                                        <div class="col-sm-2 text-muted">
                                                                            <label><strong>{{ $menu->nombre }}</strong></label>
                                                                        </div>
                                                                        <div class="col-sm-5 text-muted">
                                                                            <label><strong>{{ $producto->descripcion }}</strong></label>
                                                                        </div>
                                                                    @endforeach
                                                                @endforeach
                                                                <div class="col-sm-12">
                                                                    <!-- Button trigger modal -->
                                                                    <br>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoProducto">
                                                                        Agregar nuevo producto
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form action="{{ route('nuevoProducto') }}" method="POST">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo producto</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="col">
                                                                                            <div class="row">
                                                                                                <label>Nombre</label>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <label>Valor</label>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control" placeholder="Valor" name="precio_total">
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <label for="menus">Menú</label>
                                                                                                <select class="form-control" id="menus" name="id_menu">
                                                                                                    @foreach($usuario->peticion->restaurante->menus as $menu)
                                                                                                        <option value="{{$menu->id}}">{{ $menu->nombre }}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <label>Descripción</label>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <input type="text" class="form-control" placeholder="Descripción" name="descripcion">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 

                                                            </div>
                                                        </div>
                                                        <!--Fin Editar producto-->

                                                        <!--Inicio Editar restaurante-->
                                                        <div class="tab-pane fade text-center" id="editarRestaurante" role="tabpanel" aria-labelledby="editarRestaurante-tab">
                                                            <div class="row mt-3">
                                                                <form action="{{ route('editarRestaurante', $usuario->peticion->restaurante->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Nombre</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->peticion->restaurante->nombre}}" name="nombre">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>

                                                                <form action="{{ route('editarRestaurante', $usuario->peticion->restaurante->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Descrip.</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->peticion->restaurante->descripcion}}" name="descripcion">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>
                                                                
                                                                <form action="{{ route('editarRestaurante', $usuario->peticion->restaurante->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Teléfono</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->peticion->restaurante->telefono}}" name="telefono">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!--Fin editar restaurante-->

                                                        <!--Inicio Editar perfil-->
                                                        <div class="tab-pane fade text-center" id="editarPerfil" role="tabpanel" aria-labelledby="editarPerfil-tab">
                                                            <div class="row mt-3">
                                                                <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Nombre</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->nombre}}" name="nombre">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>

                                                                <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Apellido</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->apellido}}" name="apellido">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>

                                                                <form action="{{ route('editarPerfil', $usuario->id) }}" method="POST" class="form-inline">
                                                                    <div class="col-sm-1 form-group mb-2">
                                                                        <label>Correo</label>
                                                                    </div>
                                                                    <div class="form-group mx-sm-5 mb-2">
                                                                        <input type="text" class="form-control" placeholder="{{$usuario->correo}}" name="correo">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!--Fin Editar perfil-->
                                                    </div>
                                                @endif
                                            
                                        @endif
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>