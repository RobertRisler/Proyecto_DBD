<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>VistaUbicacionPedido</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body style="background-color: rgb(238,232,232);width: 986px;height: 703px;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ff1919;margin-top: 0px;">
        <div class="container-fluid"><a href="#" class="navbar-brand">TuComida.com</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link active">First Item</a></li>
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link">Second Item</a></li>
                    <li role="presentation" class="nav-item"><a href="#" class="nav-link">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div>
            <section style="width: 1000px;">
                <h4 style="font-size: 26px;margin-bottom: 14px;margin-right: 0px;margin-top: 3px;margin-left: 13px;">Ingrese su dirección de entrega</h4>
                <section>
                    <div class="text-justify">
                        <div><span><label for="alias" style="margin-left: 35px;">Alias</label></span><input type="text" name="alias" class="form-control-sm small" id="alias" style="margin-left: 10px;" /></div>
                        <div><span><label style="margin-left: 19px;">Ciudad</label></span><select style="margin-left: 10px;"><optgroup label="This is a group"><option value="12" selected>Santiago</option><option value="13">Temuco</option><option value="14">Valparaiso</option></optgroup></select></div>
                        <div><span><label style="margin-left: 9px;">Comuna</label></span><select style="margin-left: 10px;"><optgroup label="This is a group"><option value="12" selected>Maipú</option><option value="13">Lo Prado</option><option value="14">This is item 3</option></optgroup></select></div>
                        <div><span><label style="margin-left: 36px;">Calle</label></span><input type="text" style="margin-left: 10px;" /></div>
                        <div><span><label style="margin-left: 12px;">Número</label></span><input type="text" style="margin-left: 10px;" /></div>
                        <div><span><label style="margin-left: 18px;">Depto. </label></span><input type="text" style="margin-left: 10px;" /></div>
                        <div><span><label style="padding: 0px;margin-left: 5px;">Teléfono </label></span><input type="text" style="margin-left: 10px;" /></div>
                    </div>
                </section>
                <div style="margin: 0px;padding: 0px;margin-top: 40px;">
                    <h4 style="margin-left: 26px;">Seleccione un medio de pago</h4>
                </div>
                <section>
                    <ul class="list-inline" style="font-size: 57px;margin-top: -27px;">
                        <li class="list-inline-item border-secondary" style="margin-top: 10px;margin-right: 15px;margin-bottom: 0px;margin-left: 21px;"><label class="text-center border rounded border-secondary" style="font-size: 30px;margin-top: 0px;margin-left: 0px;margin-right: 0px;height: 45px;background-color: #ff6a6a;color: rgb(255,255,255);width: 250px;">Pago en entrega</label></li>
                        <li
                            class="list-inline-item border-secondary"><label class="text-center border rounded border-secondary" style="font-size: 30px;background-color: #ff6a6a;color: rgb(255,255,255);height: 45px;width: 240px;">Pago en crédito</label></li>
                    </ul>
                    <div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" style="margin-left: -12px;" /><label class="form-check-label" for="formCheck-1" style="margin-left: 11px;"><strong>Pago con efectivo</strong></label></div>
                    <div><span style="margin-left: 56px;margin-top: 0px;margin-bottom: 0px;">Monto a pagar: </span><input type="text" style="margin-left: 9px;" /></div>
                </section>
            </section>
            <div class="btn-toolbar">
                <div role="group" class="btn-group" style="width: auto;height: auto;margin: auto;"><button class="btn btn-primary text-right" type="button" style="margin-left: 0px;margin-top: 90px;width: 160px;height: 51px;font-size: 22px;background-color: #ff4343;">Enviar Pedido</button></div>
            </div>
        </div>
    </div>
</body>

</html>