-- Borramos las tablas si existen
DROP TABLE IF EXISTS tipo_usuarios CASCADE;
DROP TABLE IF EXISTS usuarios CASCADE;
DROP TABLE IF EXISTS categorias CASCADE;
DROP TABLE IF EXISTS productos CASCADE;
DROP TABLE IF EXISTS calles CASCADE;
DROP TABLE IF EXISTS restaurantes CASCADE;
DROP TABLE IF EXISTS despachos CASCADE; 
DROP TABLE IF EXISTS pagos CASCADE;
DROP TABLE IF EXISTS reservas CASCADE;
DROP TABLE IF EXISTS mesas CASCADE;
DROP TABLE IF EXISTS pedidos CASCADE;
DROP TABLE IF EXISTS comentarios CASCADE;
DROP TABLE IF EXISTS menus CASCADE;
DROP TABLE IF EXISTS historiales CASCADE;
DROP TABLE IF EXISTS tarjetas CASCADE;
DROP TABLE IF EXISTS direcciones CASCADE;
DROP TABLE IF EXISTS ciudades CASCADE;
DROP TABLE IF EXISTS comunas CASCADE;
DROP TABLE IF EXISTS horarios_mesas CASCADE;
DROP TABLE IF EXISTS horarios_restaurantes CASCADE;
DROP TABLE IF EXISTS calles_comunas CASCADE;
DROP TABLE IF EXISTS menus_productos CASCADE;
DROP TABLE IF EXISTS menus_restaurantes CASCADE;
DROP TABLE IF EXISTS pedidos_productos CASCADE;

CREATE SCHEMA public;

CREATE TABLE tipo_usuarios
(
	id BIGSERIAL,
	nombre VARCHAR(255),

	PRIMARY KEY(id)
 );

CREATE TABLE usuarios
(
	id BIGSERIAL ,
	nombre VARCHAR(255),
	apellido VARCHAR(255), 
	correo VARCHAR(255) UNIQUE,
	contrasena VARCHAR(255),
	id_tipo_usuario BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_tipo_usuario) REFERENCES tipo_usuarios(id)
 );
 
 CREATE TABLE categorias
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	descripcion VARCHAR(255),

	PRIMARY KEY(id)
 );
 
 CREATE TABLE productos
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	descripcion VARCHAR(255),
	precio_total DECIMAL,
	tipo VARCHAR(255),
	disponibilidad BOOLEAN,

	PRIMARY KEY(id)
 );
 
 CREATE TABLE calles
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	numero INT,

	PRIMARY KEY(id)
 );
 
 CREATE TABLE restaurantes
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	descripcion VARCHAR(255),
	promedio_valoracion INT,
	telefono  VARCHAR(255),
	hace_despacho BOOLEAN,
	validacion BOOLEAN,
	id_calle BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_calle) REFERENCES calles(id)
 );
 
 CREATE TABLE despachos
 (
	id BIGSERIAL,
	nombre_repartidor VARCHAR(255),
	rut_repartidor VARCHAR(255),
	tiempo_estimado VARCHAR(255),
	estado_despacho BOOLEAN,
	hora_despacho VARCHAR(255),

	PRIMARY KEY(id)
 );

 CREATE TABLE tarjetas
 (
	id BIGSERIAL,
	cuatro_digitos INT,
	numero_cuotas INT, 
	tipo VARCHAR(255),

	PRIMARY KEY(id)
 );
 
 CREATE TABLE pagos
 (
	id BIGSERIAL,
	tipo VARCHAR(255),
	monto DECIMAL,
	fecha TIMESTAMP,
	id_tarjeta BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_tarjeta) REFERENCES tarjetas(id)
 );
 
 CREATE TABLE reservas
 (
	id BIGSERIAL,
	cantidad_personas INT,
	fecha_reservacion TIMESTAMP,
	rut_cliente VARCHAR(255),
	nombre_cliente VARCHAR(255),
	apellido_cliente VARCHAR(255),
	estado BOOLEAN,
	id_usuario BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
 );
 
 CREATE TABLE mesas
 (
	id BIGSERIAL,
	cantidad_asientos INT,
	id_reserva BIGINT,
	id_restaurante BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_reserva) REFERENCES reservas(id),
	FOREIGN KEY(id_restaurante) REFERENCES restaurantes(id)
 );
 
 CREATE TABLE pedidos
 (
	id BIGSERIAL,
	nombre_cliente VARCHAR(255),
	apellido_cliente VARCHAR(255),
	rut_cliente VARCHAR(255),
	correo_cliente VARCHAR(255),
	fecha TIMESTAMP,
	tipo_entrega BOOLEAN,
	hora_estimada VARCHAR(255),
	estado BOOLEAN,
	id_usuario BIGINT,
	id_despacho BIGINT,
	id_pago BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_usuario) REFERENCES usuarios(id),
	FOREIGN KEY(id_despacho) REFERENCES despachos(id),
	FOREIGN KEY(id_pago) REFERENCES pagos(id)
 );
 
 CREATE TABLE comentarios
 (
	id BIGSERIAL,
	mensaje VARCHAR(255),
	valoracion INT,
	fecha TIMESTAMP,
	id_usuario BIGINT,
	id_restaurante BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_usuario) REFERENCES usuarios(id),
	FOREIGN KEY(id_restaurante) REFERENCES restaurantes(id)
 );
 
 CREATE TABLE menus
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	descripcion VARCHAR(255),
	cantidad_productos INT,
	id_categoria BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_categoria) REFERENCES categorias(id)
 );
 
 CREATE TABLE historiales
 (
	id BIGSERIAL,
	actividad VARCHAR(255),
	descripcion VARCHAR(255),
	fecha_actividad TIMESTAMP,
	id_usuario BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
 );
 
 CREATE TABLE direcciones
 (
	id BIGSERIAL,
	alias VARCHAR(255),
	id_usuario BIGINT,
	id_calle BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_usuario) REFERENCES usuarios(id),
	FOREIGN KEY(id_calle) REFERENCES calles(id)
 );
 
 CREATE TABLE ciudades 
 (
	id BIGSERIAL,
	nombre VARCHAR(255),

	PRIMARY KEY(id)
 );
 
 CREATE TABLE comunas 
 (
	id BIGSERIAL,
	nombre VARCHAR(255),
	id_ciudad BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_ciudad) REFERENCES ciudades(id)
 );
 
 CREATE TABLE horarios_mesas
 (
	id BIGSERIAL,
	hora_inicio TIME,
	hora_fin TIME,
	estado_reservacion BOOLEAN,
	id_mesa BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_mesa) REFERENCES mesas(id)
 );

CREATE TABLE horarios_restaurantes
(
	id BIGSERIAL,
	dia_semana VARCHAR(255),
	horario_apertura TIME,
	horario_cierre TIME,
	id_restaurante BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_restaurante) REFERENCES restaurantes(id)
);

CREATE TABLE calles_comunas
(
	id BIGSERIAL,
	id_calle BIGINT,
	id_comuna BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_calle) REFERENCES calles(id),
	FOREIGN KEY(id_comuna) REFERENCES comunas(id)
);

CREATE TABLE menus_productos
(
	id BIGSERIAL,
	id_menu BIGINT,
	id_producto BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_menu) REFERENCES menus(id),
	FOREIGN KEY(id_producto) REFERENCES productos(id)
);

CREATE TABLE menus_restaurantes
(
	id BIGSERIAL,
	id_menu BIGINT,
	id_restaurante BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_menu) REFERENCES menus(id),
	FOREIGN KEY(id_restaurante) REFERENCES restaurantes(id)
);

CREATE TABLE pedidos_productos
(
	id BIGSERIAL,
	id_pedido BIGINT,
	id_producto BIGINT,

	PRIMARY KEY(id),

	FOREIGN KEY(id_pedido) REFERENCES pedidos(id),
	FOREIGN KEY(id_producto) REFERENCES productos(id)
);

