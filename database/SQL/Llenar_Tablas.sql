INSERT INTO tipo_usuarios (nombre) VALUES ('administrador');
INSERT INTO tipo_usuarios (nombre) VALUES ('usuario');
INSERT INTO tipo_usuarios (nombre) VALUES ('restaurante');


INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Roberto', 'Lillo', 'robertoxlp@hotmail.com', '120996', 3);
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Manuel', 'Gutierrez', 'manuel.gutierrez@gmail.com', 'manolo_14', 2);
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Hector', 'Perez', 'hector.perez.m@usach.cl', '123457890', 2);
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Jose', 'Rojas', 'jose_rojas@hotmail.com', 'A_12341', 1);
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Luis', 'Cortés', 'cortes.luis@hotmail.com', '09120', 1);


INSERT INTO categorias (nombre, descripcion) VALUES ('Desayuno', 'Una rica y nutritiva comida para comenzar el día');
INSERT INTO categorias (nombre, descripcion) VALUES ('Almuerzo', 'Escoge los mejores puntos para disfrutar de un gran almuerzo');
INSERT INTO categorias (nombre, descripcion) VALUES ('Once', 'La comida de la tarde');
INSERT INTO categorias (nombre, descripcion) VALUES ('Cena', 'Que tu última comida del día sea la mejor');
INSERT INTO categorias (nombre, descripcion) VALUES ('Bebestibles', 'Una gran selección de bebestibles para saciar tu sed');


INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('Huevos con tocino y café', 'El desayuno típico americano', 2500.00, 'Desayuno', true);
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('Ceviche de reineta', 'Rico ceviche preparado al estilo peruano', 4000.00, 'Entrada', true);
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('Ave mayo y café', 'Un sandwich con un buen café para comenzar el día', 1750.00, 'Desayuno', true);
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('Pizza vegetariana familiar', 'Exquisita pizza preparada con los mejores vegetales', 8900.00, 'Almuerzo', false);
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('Completo dinámico', 'Un completo con todos los ingredientes chilenos', 2000.00, 'Almuerzo', true);


INSERT INTO calles (nombre, numero) VALUES ('Los aromos', 540);
INSERT INTO calles (nombre, numero) VALUES ('Las acacias', 2001);
INSERT INTO calles (nombre, numero) VALUES ('Los Helechos', 1432);
INSERT INTO calles (nombre, numero) VALUES ('Luis chacón', 298);
INSERT INTO calles (nombre, numero) VALUES ('Reina Victoria', 6728);


INSERT INTO restaurantes (nombre, descripcion, promedio_valoracion, telefono, hace_despacho, validacion, id_calle) VALUES ('PizzaHut', 'Pizzas', 3, '876876876', true, true, 3);
INSERT INTO restaurantes (nombre, descripcion, promedio_valoracion, telefono, hace_despacho, validacion, id_calle) VALUES ('Domino', 'Comida Rapida', 4, '174036929', false, true, 1);
INSERT INTO restaurantes (nombre, descripcion, promedio_valoracion, telefono, hace_despacho, validacion, id_calle) VALUES ('McDonalds', 'Hamburguesas', 2, '639564937', false, true, 1);
INSERT INTO restaurantes (nombre, descripcion, promedio_valoracion, telefono, hace_despacho, validacion, id_calle) VALUES ('La pica del Jorge', 'Completos', 1, '658946927', true, false, 4);
INSERT INTO restaurantes (nombre, descripcion, promedio_valoracion, telefono, hace_despacho, validacion, id_calle) VALUES ('Donde el tío enojao', 'Churrascos, completos', 3, '759362753', false, false, 5);


INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('Jose', '198231238', '1:30:0', false, '0:0:0');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('Miguel', '178882341', '0:45:0', true, '17:53:20');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('Caco', '153882341', '0:24:0', false, '0:0:0');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('Nicole', '172182341', '0:15:0', true, '0:15:37');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('Francisco', '178881241', '0:35:0', false, '0:0:0');


INSERT INTO tarjetas (cuatro_digitos, numero_cuotas, tipo) VALUES (9564, 0, 'debito');
INSERT INTO tarjetas (cuatro_digitos, numero_cuotas, tipo) VALUES (4786, 0, 'debito');
INSERT INTO tarjetas (cuatro_digitos, numero_cuotas, tipo) VALUES (2264, 0, 'debito');
INSERT INTO tarjetas (cuatro_digitos, numero_cuotas, tipo) VALUES (4921, 0, 'debito');
INSERT INTO tarjetas (cuatro_digitos, numero_cuotas, tipo) VALUES (2600, 14, 'credito');


INSERT INTO pagos (tipo, monto, fecha, id_tarjeta) VALUES ('efectivo', 67543.98, '1987-03-09 00:00:00', NULL);
INSERT INTO pagos (tipo, monto, fecha, id_tarjeta) VALUES ('efectivo', 81547.62, '2001-02-14 00:00:00', NULL);
INSERT INTO pagos (tipo, monto, fecha, id_tarjeta) VALUES ('tarjeta', 54165.18, '2017-03-15 00:00:00', 1);
INSERT INTO pagos (tipo, monto, fecha, id_tarjeta) VALUES ('efectivo', 90651.14, '1990-04-01 00:00:00', NULL);
INSERT INTO pagos (tipo, monto, fecha, id_tarjeta) VALUES ('efectivo', 77159.91, '1989-08-17 00:00:00', NULL);


INSERT INTO reservas (cantidad_personas, fecha_reservacion, rut_cliente, nombre_cliente, apellido_cliente, estado, id_usuario) VALUES (2, '2017-07-07 00:00:00', '191231239', 'Juan', 'Ayala', true, 2);
INSERT INTO reservas (cantidad_personas, fecha_reservacion, rut_cliente, nombre_cliente, apellido_cliente, estado, id_usuario) VALUES (4, '2019-09-09 00:00:00', '121231231', 'Olga', 'Rodriguez', false, 3);
INSERT INTO reservas (cantidad_personas, fecha_reservacion, rut_cliente, nombre_cliente, apellido_cliente, estado, id_usuario) VALUES (7, '2018-07-05 00:00:00', '47676389', 'Hector', 'Perez', true, 3);
INSERT INTO reservas (cantidad_personas, fecha_reservacion, rut_cliente, nombre_cliente, apellido_cliente, estado, id_usuario) VALUES (1, '2015-06-01 00:00:00', '179809802', 'Rodrigo', 'Hurtado', true, 2);
INSERT INTO reservas (cantidad_personas, fecha_reservacion, rut_cliente, nombre_cliente, apellido_cliente, estado, id_usuario) VALUES (3, '2019-08-05 00:00:00', '65799542', 'Ernesto', 'Lillo', false, 2);


INSERT INTO mesas (cantidad_asientos, id_reserva, id_restaurante) VALUES (4, 2, 1);
INSERT INTO mesas (cantidad_asientos, id_reserva, id_restaurante) VALUES (4, 1, 2);
INSERT INTO mesas (cantidad_asientos, id_reserva, id_restaurante) VALUES (8, 3, 3);
INSERT INTO mesas (cantidad_asientos, id_reserva, id_restaurante) VALUES (2, 4, 4);
INSERT INTO mesas (cantidad_asientos, id_reserva, id_restaurante) VALUES (4, 5, 5);


INSERT INTO pedidos (nombre_cliente, apellido_cliente, rut_cliente, correo_cliente, fecha, tipo_entrega, hora_estimada, estado, id_usuario, id_despacho, id_pago) VALUES ('Roberto', 'Lillo', '192837362', 'roberto.lillo@usach.cl', '2018-06-03 00:00:00', true, '17:15:00', true, 1, 1, 1);
INSERT INTO pedidos (nombre_cliente, apellido_cliente, rut_cliente, correo_cliente, fecha, tipo_entrega, hora_estimada, estado, id_usuario, id_despacho, id_pago) VALUES ('Javier', 'Pérez', '173839280', 'javier@gmail.es', '2019-10-11 00:00:00', false, '14:30:00', false, 2, 4, 2);
INSERT INTO pedidos (nombre_cliente, apellido_cliente, rut_cliente, correo_cliente, fecha, tipo_entrega, hora_estimada, estado, id_usuario, id_despacho, id_pago) VALUES ('Juan', 'Rodriguez', '67397463', 'juanito.rod@live.pl', '2008-12-07 00:00:00', true, '09:15:00', true, 3, 2, 3);
INSERT INTO pedidos (nombre_cliente, apellido_cliente, rut_cliente, correo_cliente, fecha, tipo_entrega, hora_estimada, estado, id_usuario, id_despacho, id_pago) VALUES ('Manuel', 'Gutierrez', '173299372', 'manuel.gutierrez@gmail.com', '2019-06-08 00:00:00', false, '21:00:00', false, 2, 2, 4);
INSERT INTO pedidos (nombre_cliente, apellido_cliente, rut_cliente, correo_cliente, fecha, tipo_entrega, hora_estimada, estado, id_usuario, id_despacho, id_pago) VALUES ('Luis', 'Cortés', '173839290', 'cortes.luis@hotmail.com', '2017-07-07 00:00:00', true, '16:00:00', true, 5, 3, 5);


INSERT INTO comentarios (mensaje, valoracion, fecha, id_usuario, id_restaurante) VALUES ('Un gran lugar, agradable ambiente.', 5, '2019-02-01 00:00:00', 2, 2);
INSERT INTO comentarios (mensaje, valoracion, fecha, id_usuario, id_restaurante) VALUES ('Pesimo lugar, no lo recomiendo.', 1, '2019-03-02 00:00:00', 2, 1);
INSERT INTO comentarios (mensaje, valoracion, fecha, id_usuario, id_restaurante) VALUES ('Encontré un pelo en mi plato, nunca vayan.', 1, '2018-02-01 00:00:00', 3, 1);
INSERT INTO comentarios (mensaje, valoracion, fecha, id_usuario, id_restaurante) VALUES ('La mesa no se encontraba en buenas condiciones, pesimo servicio.', 2, '2017-02-04 00:00:00', 5, 5);
INSERT INTO comentarios (mensaje, valoracion, fecha, id_usuario, id_restaurante) VALUES ('Excelente ubicacion, me gusto el ambiente.', 4, '2019-02-03 00:00:00', 3, 4);


INSERT INTO menus (nombre, descripcion, cantidad_productos, id_categoria) VALUES ('Vegetariano', 'Almuerzos especializados para vegeratianos', 10, 2);
INSERT INTO menus (nombre, descripcion, cantidad_productos, id_categoria) VALUES ('Vegano', 'Almuerzos especializados para veganos', 5, 2);
INSERT INTO menus (nombre, descripcion, cantidad_productos, id_categoria) VALUES ('Chileno', 'Once con marraqueta y palta', 5, 3);
INSERT INTO menus (nombre, descripcion, cantidad_productos, id_categoria) VALUES ('Peruano', 'Un buen ceviche peruano para el almuerzo', 10, 2);
INSERT INTO menus (nombre, descripcion, cantidad_productos, id_categoria) VALUES ('Americano', 'Desayunos altos en energía para el día', 5, 1);


INSERT INTO historiales (actividad, descripcion, fecha_actividad, id_usuario) VALUES ('Compra', 'Compró en Domino', '2019-02-01 00:00:00', 2);
INSERT INTO historiales (actividad, descripcion, fecha_actividad, id_usuario) VALUES ('Agregar', 'Se agregó un nuevo restaurante', '2018-05-08 00:00:00', 1);
INSERT INTO historiales (actividad, descripcion, fecha_actividad, id_usuario) VALUES ('Compra', 'Compró en PizzaHut', '2016-06-06 00:00:00', 3);
INSERT INTO historiales (actividad, descripcion, fecha_actividad, id_usuario) VALUES ('Modificar', 'Modificó precio artículo', '2018-08-08 00:00:00', 4);
INSERT INTO historiales (actividad, descripcion, fecha_actividad, id_usuario) VALUES ('Modificar', 'Modificó horario apertura', '2019-03-09 00:00:00', 5);


INSERT INTO direcciones (alias, id_usuario, id_calle) VALUES ('Casa Temuco', 1, 3);
INSERT INTO direcciones (alias, id_usuario, id_calle) VALUES ('Casa La Reina', 1, 5);
INSERT INTO direcciones (alias, id_usuario, id_calle) VALUES ('Casita', 2, 1);
INSERT INTO direcciones (alias, id_usuario, id_calle) VALUES ('House', 3, 2);
INSERT INTO direcciones (alias, id_usuario, id_calle) VALUES ('Depa', 4, 4);


INSERT INTO ciudades (nombre) VALUES ('Curicó');
INSERT INTO ciudades (nombre) VALUES ('Temuco');
INSERT INTO ciudades (nombre) VALUES ('Santiago');
INSERT INTO ciudades (nombre) VALUES ('Talca');
INSERT INTO ciudades (nombre) VALUES ('Valdivia');


INSERT INTO comunas (nombre, id_ciudad) VALUES ('Temuco', 2);
INSERT INTO comunas (nombre, id_ciudad) VALUES ('La Reina', 3);
INSERT INTO comunas (nombre, id_ciudad) VALUES ('Providencia', 3);
INSERT INTO comunas (nombre, id_ciudad) VALUES ('Estación Central', 3);
INSERT INTO comunas (nombre, id_ciudad) VALUES ('Lautaro', 2);


INSERT INTO horarios_mesas (hora_inicio, hora_fin, estado_reservacion, id_mesa) VALUES ('17:01:00', '18:00:00', true, 1);
INSERT INTO horarios_mesas (hora_inicio, hora_fin, estado_reservacion, id_mesa) VALUES ('18:01:00', '19:00:00', false, 1);
INSERT INTO horarios_mesas (hora_inicio, hora_fin, estado_reservacion, id_mesa) VALUES ('16:01:00', '17:00:00', false, 1);
INSERT INTO horarios_mesas (hora_inicio, hora_fin, estado_reservacion, id_mesa) VALUES ('17:01:00', '18:00:00', true, 2);
INSERT INTO horarios_mesas (hora_inicio, hora_fin, estado_reservacion, id_mesa) VALUES ('17:01:00', '18:00:00', true, 4);


INSERT INTO horarios_restaurantes (dia_semana, horario_apertura, horario_cierre, id_restaurante) VALUES ('Lunes', '08:00:00', '18:00:00', 1);
INSERT INTO horarios_restaurantes (dia_semana, horario_apertura, horario_cierre, id_restaurante) VALUES ('Martes', '08:00:00', '18:00:00', 1);
INSERT INTO horarios_restaurantes (dia_semana, horario_apertura, horario_cierre, id_restaurante) VALUES ('Sábado', '09:00:00', '14:00:00', 1);
INSERT INTO horarios_restaurantes (dia_semana, horario_apertura, horario_cierre, id_restaurante) VALUES ('Jueves', '08:00:00', '18:00:00', 2);
INSERT INTO horarios_restaurantes (dia_semana, horario_apertura, horario_cierre, id_restaurante) VALUES ('Domingo', '12:00:00', '15:00:00', 3);


INSERT INTO calles_comunas (id_calle, id_comuna) VALUES (1, 2);
INSERT INTO calles_comunas (id_calle, id_comuna) VALUES (2, 3);
INSERT INTO calles_comunas (id_calle, id_comuna) VALUES (1, 5);
INSERT INTO calles_comunas (id_calle, id_comuna) VALUES (5, 2);
INSERT INTO calles_comunas (id_calle, id_comuna) VALUES (3, 2);


INSERT INTO menus_productos (id_menu, id_producto) VALUES (1, 4);
INSERT INTO menus_productos (id_menu, id_producto) VALUES (3, 5);
INSERT INTO menus_productos (id_menu, id_producto) VALUES (3, 2);
INSERT INTO menus_productos (id_menu, id_producto) VALUES (2, 1);
INSERT INTO menus_productos (id_menu, id_producto) VALUES (4, 2);


INSERT INTO menus_restaurantes (id_menu, id_restaurante) VALUES (1, 4);
INSERT INTO menus_restaurantes (id_menu, id_restaurante) VALUES (2, 1);
INSERT INTO menus_restaurantes (id_menu, id_restaurante) VALUES (5, 4);
INSERT INTO menus_restaurantes (id_menu, id_restaurante) VALUES (5, 2);
INSERT INTO menus_restaurantes (id_menu, id_restaurante) VALUES (3, 5);


INSERT INTO pedidos_productos (id_pedido, id_producto) VALUES (3, 4);
INSERT INTO pedidos_productos (id_pedido, id_producto) VALUES (1, 3);
INSERT INTO pedidos_productos (id_pedido, id_producto) VALUES (2, 1);
INSERT INTO pedidos_productos (id_pedido, id_producto) VALUES (4, 2);
INSERT INTO pedidos_productos (id_pedido, id_producto) VALUES (5, 4);