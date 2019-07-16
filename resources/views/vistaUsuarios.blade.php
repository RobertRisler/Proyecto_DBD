<?php use \App\Http\Controllers\VistaUsuarioController; ?>
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
                <ul class="nav navbar-nav ml-auto">
                    
                </ul>
                
                @if(auth()->check())
                    <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Bienvenido {{auth()->user()->nombre }}
                      </a>
                      <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="/user">Mi perfil</a>
                        <div class="dropdown-divider"></div>
                        

                        <form method="POST" action="{{ route ('logout') }}">
                            {{csrf_field()}}
                            <button class="btn btn-primary">Cerrar sesión</button>

                        </form>


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
                                    <div class="ml-auto">
                                        <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <ul class="list-group">
                                        <li class="list-group-item text">Información Personal</li>
                                        <li class="list-group-item text"><span class="pull-left">
                                            <strong>Nombre</strong></span><br>
                                            <span class="pull-left text-muted">{{$user->nombre}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Apellido</strong></span><br>
                                            <span class="pull-left text-muted">{{$user->apellido}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Email</strong></span><br>
                                            <span class="pull-left text-muted">{{$user->correo}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Creación</strong></span><br>
                                            <span class="pull-left text-muted">{{$user->created_at}}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-9">
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
                                    </ul>

                                    <div class="tab-content ml-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="misDirecciones" role="tabpanel" aria-labelledby="misDirecciones-tab">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label><strong>Alias</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Calle</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Número</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Comuna</strong></label>
                                                </div>

                                                @foreach($direcciones as $direccion)
                                                    <div class="col-sm-4 text-muted">
                                                        <label>{{$direccion->alias}}</label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label>{{ (VistaUsuarioController::CalleDireccion($direccion))->nombre }}</label>
                                                    </div>
                                                    <div class="col-sm-2 text-muted">
                                                        <label>{{ (VistaUsuarioController::CalleDireccion($direccion))->numero }}</label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label>{{ (VistaUsuarioController::ComunaCalle($direccion))->nombre }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="misPedidos" role="tabpanel" aria-labelledby="misPedidos-tab">
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <label><strong>ID</strong></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Valor</strong></label>
                                                </div>

                                                @foreach($pedidos as $pedido)
                                                    <div class="col-sm-1 text-muted">
                                                        <label><strong>{{$pedido->id}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-4 text-muted">
                                                        <label><strong>{{$pedido->fecha}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-4 text-muted">
                                                        <label><strong>placeholder</strong></label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label><strong>placeholder</strong></label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="misReservas" role="tabpanel" aria-labelledby="misReservas-tab">
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <label><strong>ID</strong></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Estado</strong></label>
                                                </div>

                                                @foreach($reservas as $reserva)
                                                    <div class="col-sm-1 text-muted">
                                                        <label><strong>{{$reserva->id}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-4 text-muted">
                                                        <label><strong>{{$reserva->fecha_resevacion}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-4 text-muted">
                                                        <label><strong>placeholder</strong></label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label><strong>{{$reserva->estado}}</strong></label>
                                                    </div>
                                                @endforeach
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>