<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - YA-PEDIDOS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/select.css">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
  -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
  box-shadow:         1px 1px 3px 2px #cc1414;">
        <div class="container"><a href="#page-top" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">

                    
                </ul>
                
                <a class="btn btn-primary" href="{{ url('login') }}">Inicia sesión</a>
                <a class="btn btn-primary" href="{{ url('register') }}">Registrate</a>
                
            </div>
        </div>
    </nav>

</head>


<body id="page-top" style="background-color: rgb(241,120,94)">    
    <div class="container" style="  margin-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro Restaurante') }}</div>

                    <div class="card-body" >
                        <form method="POST" action="{{ url('/restaurante/ubicacion') }}">
                            @csrf
                            <!--Nombre -->
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Restaurante') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Descripcion -->
                            <div class="form-group row">
                                <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                    <div class="col-md-6 form-group green-border-focus">
                                      
                                      <textarea class="form-control @error('descripcion') is-invalid @enderror" type="text" id="descripcion" name= "descripcion"rows="3" required autofocus >
                                          @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                      </textarea>
                                    </div>
                            </div>
                            
                            <!--Telefono -->
                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono Restaurante') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Hace despacho -->
                            <div class="form-group row">
                                <label for="hace_despacho" class="col-md-4 col-form-label text-md-right">{{ __('¿Hace despacho?') }}</label>
                                <div class="col-md-6">
                                    <select name="hace_despacho" id="input_hace_despacho" class="form-control" required>
                                        <option value="" disabled=""> -- Eliga una opción -- </option>
                                        
                                            <option value="true">Si</option>
                                            <option value="false">No</option>
                                            
                                        
                                    </select>
                                </div>
                            </div>

                            <!--ciudad -->
                            <div class="form-group row">
                                <label for="nombre_ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_ciudad" type="text" class="form-control @error('nombre_ciudad') is-invalid @enderror" name="nombre_ciudad" value="{{ old('nombre_ciudad') }}" required autofocus>

                                    @error('nombre_ciudad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--comuna -->
                            <div class="form-group row">
                                <label for="nombre_comuna" class="col-md-4 col-form-label text-md-right">{{ __('Comuna') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_comuna" type="text" class="form-control @error('nombre_comuna') is-invalid @enderror" name="nombre_comuna" value="{{ old('nombre_comuna') }}" required autofocus>

                                    @error('nombre_comuna')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <!--calle -->
                            <div class="form-group row">
                                <label for="calle" class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_calle" type="text" class="form-control @error('nombre_calle') is-invalid @enderror" name="nombre_calle" value="{{ old('nombre_calle') }}" required autofocus>

                                    @error('nombre_calle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--numero -->
                            <div class="form-group row">
                                <label for="numero_casa" class="col-md-4 col-form-label text-md-right">{{ __('Número de la calle') }}</label>

                                <div class="col-md-6">
                                    <input id="numero_casa" type="text" class="form-control @error('numero_casa') is-invalid @enderror" name="numero_casa" value="{{ old('numero_casa') }}" required autofocus>

                                    @error('numero_casa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Se ingresan los valores por defecto-->
                            <input id="promedio_valoracion" name="promedio_valoracion" type="hidden" value="0">
                            <input id="validacion" name="validacion" type="hidden" value="false">

                            

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
            </div>
        </div>
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
