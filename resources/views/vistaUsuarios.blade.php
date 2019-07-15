<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

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
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
            -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
            box-shadow:         1px 1px 3px 2px #cc1414;">
            <div class="container">
                <a href="#page-top" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a>
                <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                </button>
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
                                            <span class="pull-left text-muted">Roers</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Apellido</strong></span><br>
                                            <span class="pull-left text-muted">Risler</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Email</strong></span><br>
                                            <span class="pull-left text-muted">roers.risler@mail.com</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Creación</strong></span><br>
                                            <span class="pull-left text-muted">1/2/3</span>
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
                                                <div class="col-sm-3">
                                                    <label><strong>Alias</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Comuna</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Calle</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Número</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="misPedidos" role="tabpanel" aria-labelledby="misPedidos-tab">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label><strong>ID</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Valor</strong></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="misReservas" role="tabpanel" aria-labelledby="misReservas-tab">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label><strong>ID</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Estado</strong></label>
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
        </div>
    </body>
</html>