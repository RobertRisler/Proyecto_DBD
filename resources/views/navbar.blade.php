<head>	
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pagina Principal - YA-PEDIDOS</title>
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