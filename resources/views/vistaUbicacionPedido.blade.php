<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>VistaEnviarPedido</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body style="color: rgb(0,0,0);background-color: rgb(231,238,231);">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ff0f0f;">
        <div class="container-fluid"><a href="#" class="navbar-brand" style="color: #ffffff;"><strong><em>TuComida</em></strong></a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link active" style="color: rgba(255,255,255,0.9);"><strong>First Item</strong></a></li>
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link" style="color: rgba(255,255,255,0.7);"><strong>Second Item</strong></a></li>
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link" style="color: rgba(255,255,255,0.5);"><strong>Third Item</strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>
        <div>
            <section>
                <h4 style="margin-top: 10px;margin-left: 10px;">Ingrese su dirección de entrega</h4>
                <section>
                    <div style="margin-top: 10px;margin-left: 10px;">
                        <div><label>Alias</label><input type="text" style="margin-left: 37px;" /></div>
                        <div><label>Ciudad</label><select style="margin-left: 20px;"><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                        <div><label>Comuna</label><select style="margin-left: 11px;"><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                        <div><label>Calle</label><input type="text" style="margin-left: 36px;" /></div>
                        <div><label>Número</label><input type="text" style="margin-left: 12px;" /></div>
                        <div><label>Depto.</label><input type="text" style="margin-left: 23px;" /></div>
                        <div><label>Teléfono</label><input type="text" style="margin-left: 10px;" /></div>
                    </div>
                </section>
                <div>
                    <h4 style="margin-top: 20px;margin-left: 10px;">Seleccione un medio de pago</h4>
                </div>
                <section class="text-justify" style="margin-top: 20px;margin-bottom: 0px;margin-left: 10px;">
                    <div role="group" class="btn-group" style="margin-left: 0px;"><button class="btn btn-primary" type="button" style="background-color: rgb(20,146,40);">Pago en entrega</button><button class="btn btn-primary" type="button" style="background-color: rgb(20,146,40);margin-left: 10px;">Pago con crédito</button></div>
                    <div
                        class="form-check" style="margin-top: 20px;"><input type="radio" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1"><strong>Pago con efectivo</strong></label></div>
        <div style="margin-top: 10px;margin-left: 20px;"><span><em>Ingrese el monto</em></span><input type="text" style="margin-left: 10px;" /></div>
        </section>
        </section>
        <div class="text-center"><button class="btn btn-primary text-center border rounded" type="button" style="width: 200px;height: 80px;background-color: rgb(255,0,0);font-size: 25px;"><strong><em>Enviar Pedido</em></strong></button></div>
    </div>
    </div>
</body>

</html>