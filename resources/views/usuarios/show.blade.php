<!doctype html>
<html>

<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Administración Usuario - YA-PEDIDOS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/select.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
  -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
  box-shadow:         1px 1px 3px 2px #cc1414;">
        <div class="container"><a href="/" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fa fa-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    
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
                        <a class="dropdown-item" href="/user">Mi perfil</a>
                        <div class="dropdown-divider">
                            
                        </div>
                        

                        <form method="POST" action="{{ route ('logout') }}">
                            {{csrf_field()}}
                            <button class="btn btn-primary">Cerrar sesión</button>

                        </form>
                     </li>
                        @elseif ((auth()->user()->id_tipo_usuario)=="1")<!--Si es tipo administrador-->

                        <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Bienvenido Administrador {{auth()->user()->nombre }}
                      </a>
                      <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="/#">Administración</a>
                        <div class="dropdown-divider">
                            
                        </div>
                        

                        <form method="POST" action="{{ route ('logout') }}">
                            {{csrf_field()}}
                            <button class="btn btn-primary">Cerrar sesión</button>

                        </form>


                        @else <!--Si es tipo restaurante-->



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

   



<div class="row">
    <div class="col-md-6" style="  margin-top: 80px;">
        <h1>Administrar usuarios</h1>
    </div>
    

</div>
<table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Nombre Usuario</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <th>{{ $usuario->nombre }}</th>
                            <th>{{ $usuario->apellido }}</th>
                            <th>{{ $usuario->correo }}</th>
                            
                            
                        </tr>
                    
                </tbody>
   </table>
<a class="btn btn-sm btn-success" href="{{url('usuario')}}">Volver</a>
   
                
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









