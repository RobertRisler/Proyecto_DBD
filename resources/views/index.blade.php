

@extends('navbar')


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
        <div class="col" style="  margin-top: 10px;">
                <form action="{{ route('searchName') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar restaurante por nombre" required>
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </span>
                    </div>
                </form>
        </div>
        <div class="col" style="  margin-top: 10px;">
                <form action="{{ route('searchLocation') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar restaurante por ubicacion" required>
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </span>
                    </div>
                </form>
        </div>
        <div class="col" style="  margin-top: 10px;">
                <form action="{{ route('searchValoration') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Valoracion (entre 1 y 5)" required>
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </span>
                    </div>
                </form>
        </div>
        <div class="col" style="  margin-top: 10px;">
                <form action="{{ route('searchCategory') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Buscar por categoria ej almuerzo" required>
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </span>
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
</body>
