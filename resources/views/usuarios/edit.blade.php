<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pagina Principal - YA-PEDIDOS</title>
    

    
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
  -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
  box-shadow:         1px 1px 3px 2px #cc1414;">
        <div class="container"><a href="#page-top" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item"><a href="#pago" class="nav-link js-scroll-trigger">métodos de pago</a></li>
                    <li role="presentation" class="nav-item"><a href="#restaurante" class="nav-link js-scroll-trigger">restaurantes</a></li>
                </ul>
                


                @if(auth()->check())
                    @if((auth()->user()->id_tipo_usuario)=="2")<!--Si es tipo usuario-->
                     <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('buscar') }}">Buscar Productos</a>
                    </li>
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
                        <a class="dropdown-item" href="/usuario">Administración Usuario</a>
                         <div class="dropdown-divider">   
                        </div>
                        <a class="dropdown-item" href="/restaurante">Administración Restaurante</a>
                        <div class="dropdown-divider">   
                        </div>
                        

                        <form method="POST" action="{{ route ('logout') }}">
                            {{csrf_field()}}
                            <button class="btn btn-primary">Cerrar sesión</button>

                        </form>


                        @else <!--Si es tipo restaurante-->
                        <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('buscar') }}">Buscar Productos</a>
                    </li>
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
                        <a class="btn btn-primary" href="{{ url('buscar') }}">Buscar Productos</a>
                      <a class="btn btn-primary" href="{{ url('login') }}">Inicia sesión</a>
                        <a class="btn btn-primary" href="{{ url('register') }}">Registrate</a>
                    </li>

                @endif

                
                
            </div>
        </div>
    </nav>
   



<div class="row" style="  margin-top: 180px;>
    <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Editar usuario</h1>
    </div>
    


    <form action="{{route('usuario.update',$usuario->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-12">
            <strong>Nombre Usuario</strong>
            <input type="text" name="nombre" class="form-control" value="{{$usuario->nombre}}">
        </div>
        <div class="col-md-12">
            <strong>Apellido Usuario</strong>
            <input type="text" name="apellido" class="form-control" value="{{$usuario->apellido}}">
        </div>
        <div class="col-md-12">
            <strong>Correo Usuario</strong>
            <input type="text" name="correo" class="form-control" value="{{$usuario->correo}}">
        </div>

        <div class="col-md-12">
            <a href="{{url('usuario')}}" class="btn btn-sm btn-success">Volver</a>
           
            <button type="submit" class="btn btn-sm btn-primary">Guardar</button> 
        </div>
        



    </form>





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









