 INSERT INTO tipo_usuarios (nombre) VALUES ('administrador');
 INSERT INTO tipo_usuarios (nombre) VALUES ('usuario');
 INSERT INTO tipo_usuarios (nombre) VALUES ('restaurante');
 
 

INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Miguel','Muñoz', 'miguel.muñoz@usach.cl', '221', '1' );
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Jose','Videla', 'jose_@gmail.com', '14221', '2' );
INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_tipo_usuario) VALUES ('Javier','Rojas', 'javier_xd@hotmail.com', 'hola_12', '1' );


INSERT INTO categorias (nombre, descripcion) VALUES ('','');
INSERT INTO categorias (nombre, descripcion) VALUES ('','');
INSERT INTO categorias (nombre, descripcion) VALUES ('','');


INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('','','','','');
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('','','','','');
INSERT INTO productos (nombre, descripcion, precio_total, tipo, disponibilidad) VALUES ('','','','','');


INSERT INTO calles (nombre, numero) VALUES ('','');
INSERT INTO calles (nombre, numero) VALUES ('','');
INSERT INTO calles (nombre, numero) VALUES ('','');


INSERT INTO restaurantes () VALUES ();
INSERT INTO restaurantes () VALUES ();
INSERT INTO restaurantes () VALUES ();


INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('','','','','');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('','','','','');
INSERT INTO despachos (nombre_repartidor, rut_repartidor, tiempo_estimado, estado_despacho, hora_despacho) VALUES ('','','','','');


