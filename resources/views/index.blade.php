<!DOCTYPE html>
<html>

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
                        <a class="dropdown-item" href="/usuario">Panel Administración</a>
                         <div class="dropdown-divider">   
                        </div>
                        <a class="dropdown-item" href="/#">Administración</a>
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
<header class="masthead text-center text-white d-flex" style="background-color: rgb(241,120,94)">
    <div class="container my-auto">
        @if (session()->has('flash'))
                    <div class="alert alert-info">{{session('flash')}}</div>
                @endif

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"><strong><br />Comida a domicilio online<br /></strong></h1>
                <hr />
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Encuentra los mejores restaurantes, almuerzos y menús en donde te encuentres<br /></p>
        </div>
        <div class="row" style="  background-color: rgb(238,232,232);">
            <div class="col" style="  margin-top: 20px;">
                <form>
                    <div class="field">
                        <select class="form-control" required>
                        <option value="" disabled selected>Elige una ciudad</option>
                            @foreach ($ciudades as $ciudad)
                                <option value="{{ $ciudad->id }}" selected>
                                  {{  $ciudad->nombre }}
                                </option>
                                @endforeach
                        </select>

                    </div>
                </form>
            </div>
            <div class="col">
                <form class="search-form" style="  margin-top: 20px;">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Calle y número de casa" />
                        <div class="input-group-append"><button class="btn btn-light" type="button">Search </button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card"></div>
</header><section id="pago" class="bg-primary">
    <div class="container" >
        <div class="row">
            <div class="col offset-lg-8 mx-auto text-center">
                <h2 class="text-white section-heading" style=" ">Pago en efectivo</h2>
                <hr class="light my-4" />
                <p class="text-faded mb-4">Realiza el pago al momento que llege tu pedido a la puerta de tu casa!</p>
                <div class ="col offset-lg-8 mx-auto text-center">
                    <img src="assets/images/pago-en-efectivo.png" alt="..." class="img-responsive" style="width:400px; height: 300px">
                </div>
            </div>
            
            <div class="col offset-lg-8 mx-auto text-center">
                <h2 class="text-white section-heading" style=" ">Paga online</h2>
                <hr class="light my-4" />
                <p class="text-faded mb-4">Puedes realizar el pago de manera online con alguna tarjeta de credito!</p>
                <div class ="col offset-lg-8 mx-auto text-center">
                    <img src="assets/images/credit-card-2761073_960_720.png" alt="..." class="img-responsive" style="width:400px; height: 300px">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="comentario">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Los comentarios de restaurantes</h2>
                <hr class="my-4" />

            </div>
        </div>
    </div>
    
</section>
<section id="restaurante"  style="background-color: rgb(241,120,94)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white section-heading">Los restaurantes disponibles</h2>
                <hr class="light my-4" />
                

                <div class="card-deck"><!--Inicio cards-->
                     @foreach ($restaurantes as $restaurante)
                        @if (($restaurante->id)=="1")

                      <div class="card">
                        <img src="assets/images/pizza-hut.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$restaurante->nombre}}</h5>
                          <p class="card-text">{{$restaurante->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">{{$restaurante->created_at}}</small>
                        </div>
                      </div>

                      @elseif (($restaurante->id)=="2")

                      <div class="card">
                        <img src="assets/images/domino.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$restaurante->nombre}}</h5>
                          <p class="card-text">{{$restaurante->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">{{$restaurante->created_at}}</small>
                        </div>
                      </div>

                      @elseif (($restaurante->id)=="3")
                      <div class="card">
                        <img src="assets/images/macdoland.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$restaurante->nombre}}</h5>
                          <p class="card-text">{{$restaurante->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">{{$restaurante->created_at}}</small>
                        </div>
                      </div>
                </div>
                @endif
                @endforeach



            </div>
        </div>
    </div>
    
</section>
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