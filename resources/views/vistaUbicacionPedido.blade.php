<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - YA-PEDIDOS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/select.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://live.pystatic.com/webassets/common-59b97a0c65b8ee3dc1fe156c160a30ca.css" />
	<link rel="stylesheet" href="https://live.pystatic.com/webassets/fonts-ddbdb64488fa2d770da5122493f3ba5f.css" />
	<link rel="stylesheet" href="https://live.pystatic.com/webassets/style-595d08490021ca42295f2c2ff1d90a9a.css" />
	<link rel="stylesheet" href="https://live.pystatic.com/webassets/searchBar-a3d0680fb12158fd18a65cb525ad8ea9.css" />
</head>
<body style="color: rgb(0,0,0);background-color: rgb(231,238,231);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
  -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
  box-shadow:         1px 1px 3px 2px #cc1414;">
        <div class="container"><a href="#page-top" class="navbar-brand js-scroll-trigger" style="font-size: 20px;">YA-PEDIDOS</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item"><a href="#comentario" class="nav-link js-scroll-trigger" style="font-size: 16px;">Nuestra Comunidad</a></li>
                    <li role="presentation" class="nav-item"><a href="#restaurante" class="nav-link js-scroll-trigger" style="font-size: 16px;">restaurantes</a></li>
                </ul>             
            </div>
        </div>
    </nav>
    <div>
        <div>
            <section>
                <h4 style="margin-top: -20px;margin-left: 20px;font-size: 24px;"><em>Ingrese su dirección de entrega</em></h4>
                <section>
                    <div style="margin-top: -80px;margin-left: 20px;">
                        <!--<div><label style="font-size: 20px;"><strong>Alias</strong></label>
							<input type="text" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
							</div>
                        <div><label style="font-size: 20px;"><strong>Ciudad</strong></label>
							<select style="margin-left: 10px;max-width: 178px;font-size: 16px">
								<optgroup>
									<option value="1" selected style="color: rgb(142,142,142)">Elige ciudad</option>
									@foreach ($ciudades as $ciudad)
										<option value="{{$ciudad->nombre}}">{{$ciudad->nombre}}</option>
									@endforeach
							</optgroup>
						</select>
							</div>
                        <div><label style="font-size: 20px;"><strong>Comuna</strong></label><select style="margin-left: 10px;max-width: 178px;font-size: 16px"><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                        <div><label style="font-size: 20px;"><strong>Calle</strong></label><input type="text" style="margin-left: 10px;max-width: 178px;font-size: 16px" /></div>
                        <div><label style="font-size: 20px;"><strong>Número</strong></label><input type="text" style="margin-left: 10px;max-width: 178px;font-size: 16px" /></div>
                        <div><label style="font-size: 20px;"><strong>Depto.</strong></label><input type="text" style="margin-left: 10px;max-width: 178px;font-size: 16px" /></div>
                        <div><label style="font-size: 20px;"><strong>Teléfono</strong></label><input type="text" style="margin-left: 10px;max-width: 178px;font-size: 16px" /></div>-->
						<div>
							<form class="form-horizontal" method="post">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<fieldset>
									<div class="form-group">
									<label for "alias" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Alias</strong></label>
									<input type="text" class="form-control" id="alias" placeholder="Alias" name="alias" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
									<div class="form-group">
									<label for "nombre_ciudad" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Ciudad</strong></label>
									<input type="text" class="form-control" id="nombre_ciudad" placeholder="Ciudad" name="nombre_ciudad" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
									<div class="form-group">
									<label for "nombre_comuna" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Comuna</strong></label>
									<input type="text" class="form-control" id="nombre_comuna" placeholder="Comuna" name="nombre_comuna" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
									<div class="form-group">
									<label for "nombre_calle" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Calle</strong></label>
									<input type="text" class="form-control" id="nombre_calle" placeholder="Calle" name="nombre_calle" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
									<div class="form-group">
									<label for "numero" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Número</strong></label>
									<input type="text" class="numero" id="numero" placeholder="123" name="numero" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
									<div class="form-group">
									<label for "telefono" class="col-lg-2 control-label" style="font-size: 20px;"><strong>Teléfono</strong></label>
									<input type="text" class="form-control" id="telefono" placeholder="12345678" name="telefono" style="margin-left: 10px;max-width: 178px;font-size: 16px" />
									</div>
								</fieldset>
							</form>
						</div>
                    </div>
                </section>
                <div>
                    <h4 style="margin-top: -20px;margin-left: 20px;font-size: 24px;"><em>Seleccione un medio de pago</em></h4>
                </div>
                <section class="text-justify" style="margin-top: -60px;margin-bottom: 0px;margin-left: 20px;">
                    <div role="group" class="btn-group" style="margin-left: 0px;">
						<button class="btn btn-primary" type="button" style="background-color: rgb(20,146,40);font-size: 20px;">Pago en entrega</button>
						<button class="btn btn-primary" type="button" style="background-color: rgb(20,146,40);margin-left: 10px;font-size: 20px;">Pago con crédito</button>
					</div>
                    <div class="custom-control custom-checkbox" style="margin-top: 20px;">
							<input type="checkbox" class="custom-control-input" id= "customCheck" name="example1" />
								<label class="custom-control-label" for="customCheck">
									<strong style="font-size: 20px;">Pago con efectivo</strong>
								</label>
					</div>
			<div style="margin-top: 10px;margin-left: 30px;">
				<span>
					<em style="font-size: 16px;">Ingrese el monto</em>
				</span>
				<input type="text" style="margin-top: 10px;margin-left: 10px;max-width: 178px;font-size: 16px" />
			</div>
        </section>
        </section>
        <div class="text-center">
			<button class="btn btn-primary text-center" type="button" style="margin-top: -100px;width: 200px;height: 80px;background-color: rgb(255,0,0);font-size: 25px;">
				<strong>
					<em>Enviar Pedido</em>
				</strong>
			</button>
		</div>
    </div>
    </div>
</body>

</html>

