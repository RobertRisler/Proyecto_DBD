<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Rutas de usuario*/

Route::post('/usuario', 'UserController@store');
Route::post('/usuario/{id_usuario}/{id_restaurante}/comentarios', 'UserController@agregarComentario');
Route::put('/usuario/{id}', 'UserController@update');
Route::put('/usuario/{id_usuario}/{id_restaurante}/{id_comentario}/comentarios','UserController@modificarComentario');
Route::get('/usuario','UserController@index');
Route::get('/usuario/{id}','UserController@show');
Route::get('/usuario/{id_usuario}/comentarios','UserController@mostrarTotalComentarios');
Route::get('/usuario/{id_usuario}/{id_restaurante}/comentarios','UserController@mostrarComentarios');
/*Muesta el historial de un usuario*/
Route::get('/historialUsuario/{id}','UserController@mostrarHistorial');
/*Muesta comentarios de un usuario*/
Route::get('/comentariosUsuario/{id}','UserController@mostrarComentarios');

Route::delete('/usuario/{id}','UserController@destroy');
Route::delete('/usuario/{id_usuario}/{id_restaurante}/{id_comentario}/comentarios','UserController@eliminarComentario');

/*Rutas de tarjeta*/

Route::post('/tarjeta', 'TarjetaController@store');
Route::put('/tarjeta/{id}', 'TarjetaController@update');
Route::get('/tarjeta','TarjetaController@index');
Route::get('/tarjeta/{id}','TarjetaController@show');
Route::delete('/tarjeta/{id}','TarjetaController@destroy');

/*Rutas de categoria*/

Route::post('/categoria', 'CategoriaController@store');
Route::put('/categoria/{id}', 'CategoriaController@update');
Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/{id}','CategoriaController@show');
Route::delete('/categoria/{id}','CategoriaController@destroy');
Route::get('/categoriaMenu/{id}','CategoriaController@mostrarMenuCategoria');



/*Rutas de producto*/

Route::post('/producto', 'ProductoController@store');
Route::put('/producto/{id}', 'ProductoController@update');
Route::get('/producto','ProductoController@index');
Route::get('/producto/{id}','ProductoController@show');
Route::delete('/producto/{id}','ProductoController@destroy');

/*Rutas de calle*/

Route::post('/calle', 'CalleController@store');
Route::put('/calle/{id}', 'CalleController@update');
Route::get('/calle','CalleController@index');
Route::get('/calle/{id}','CalleController@show');
Route::delete('/calle/{id}','CalleController@destroy');

Route::get('/calleDirecciones/{id}','CalleController@mostrarDirecciones');/*muestra direcciones que tienen esa calle*/
Route::get('/calleRestaurantes/{id}','CalleController@mostrarRestaurantes');/*Muestra restaurantes con esa calle*7



/*Rutas de restaurante*/

Route::post('/restaurante', 'RestauranteController@store');
Route::post('/restaurante/{id}/mesas', 'RestauranteController@agregarMesa');
Route::post('/restaurante/ubicacion', 'RestauranteController@crearRestaurante');
Route::put('/restaurante/{id}', 'RestauranteController@update');
Route::put('/restaurante/{id}/ubicacion', 'RestauranteController@modificarRestaurante');
Route::put('/restaurante/{id_restaurante}/{id_mesa}/mesas', 'RestauranteController@cambiarMesa');
Route::get('/restaurante','RestauranteController@index');
Route::get('/restaurante/{id}','RestauranteController@show');
Route::get('/restaurante/{id}/ubicacion','RestauranteController@mostrarRestaurante');
Route::get('/restaurante/{id}/mesas','RestauranteController@mostrarMesas');
Route::delete('/restaurante/{id}','RestauranteController@destroy');
Route::delete('/restaurante/{id_restaurante}/{id_mesa}/mesas','RestauranteController@eliminarMesa');
Route::delete('/restaurante/{id}/ubicacion','RestauranteController@eliminarRestaurante');

/*Rutas de despacho*/

Route::post('/despacho', 'DespachoController@store');
Route::put('/despacho/{id}', 'DespachoController@update');
Route::get('/despacho','DespachoController@index');
Route::get('/despacho/{id}','DespachoController@show');

Route::get('/pedidoDespacho/{id}','DespachoController@mostrarPedido');

Route::delete('/despacho/{id}','DespachoController@destroy');

/*Rutas de pago*/

Route::post('/pago', 'PagoController@store');
Route::put('/pago/{id}', 'PagoController@update');
Route::get('/pago','PagoController@index');
Route::get('/pago/{id}','PagoController@show');
Route::delete('/pago/{id}','PagoController@destroy');

/*Rutas de reserva*/

Route::post('/reserva', 'ReservaController@store');
Route::put('/reserva/{id}', 'ReservaController@update');
Route::get('/reserva','ReservaController@index');
Route::get('/reserva/{id}','ReservaController@show');
/*Muestra las mesas de una reserva*/
Route::get('/mesasReserva/{id}','ReservaController@mostrarMesas');
Route::delete('/reserva/{id}','ReservaController@destroy');

/*Rutas de mesa*/

Route::post('/mesa', 'MesaController@store');
Route::put('/mesa/{id}', 'MesaController@update');
Route::get('/mesa','MesaController@index');
Route::get('/mesa/{id}','MesaController@show');
Route::delete('/mesa/{id}','MesaController@destroy');

/*Rutas de pedido*/

Route::post('/pedido', 'PedidoController@store');
Route::put('/pedido/{id}', 'PedidoController@update');
Route::get('/pedido','PedidoController@index');
Route::get('/pedido/{id}','PedidoController@show');
/*Muestra un usuario de un pedido*/
Route::get('/usuarioPedido/{id}','PedidoController@mostrarUsuario');
/*Muestra despacho de un pedido*/
Route::get('/despachoPedido/{id}','PedidoController@mostrarDespacho');
Route::delete('/pedido/{id}','PedidoController@destroy');

/*Rutas de comentario*/

Route::post('/comentario', 'ComentarioController@store');
Route::put('/comentario/{id}', 'ComentarioController@update');
Route::get('/comentario','ComentarioController@index');
Route::get('/comentario/{id}','ComentarioController@show');
Route::delete('/comentario/{id}','ComentarioController@destroy');

Route::get('/comentario/usuario/{id}','ComentarioController@mostrarComentarioUsuario');
Route::get('/comentario/restaurante/{id}','ComentarioController@mostrarComentarioRestaurante');


/*Rutas de menu*/

Route::post('/menu', 'MenuController@store');
Route::post('/menu/{id}', 'MenuController@agregarMenu');
Route::put('/menu/{id}', 'MenuController@update');
Route::put('/menu/{id_categoria}/{id_menu}/categorias', 'MenuController@modificarMenu');
Route::get('/menu','MenuController@index');
Route::get('/menu/{id}','MenuController@show');
Route::get('/menu/{id}/categorias','MenuController@mostrarMenus');
Route::delete('/menu/{id}','MenuController@destroy');
Route::delete('/menu/{id_categorias}/{id_menu}/categorias','MenuController@eliminarMenu');

/*Rutas de historial*/

Route::post('/historial', 'HistorialController@store');
Route::put('/historial/{id}', 'HistorialController@update');
Route::get('/historial','HistorialController@index');
Route::get('/historial/{id}','HistorialController@show');

Route::get('/usuarioHistorial/{id}','HistorialController@mostrarUsuario');
Route::delete('/historial/{id}','HistorialController@destroy');

/*Rutas de ciudad*/

Route::post('/ciudad', 'CiudadController@store');
Route::put('/ciudad/{id}', 'CiudadController@update');
Route::get('/ciudad','CiudadController@index');
Route::get('/ciudad/{id}','CiudadController@show');
Route::delete('/ciudad/{id}','CiudadController@destroy');

Route::get('/comunaCiudad/{id}','CiudadController@mostrarComunasCiudad');/*Muestra las ciudades  de una comuna*/


/*Rutas de comuna*/

Route::post('/comuna', 'ComunaController@store');
Route::put('/comuna/{id}', 'ComunaController@update');
Route::get('/comuna','ComunaController@index');
Route::get('/comuna/{id}','ComunaController@show');
Route::delete('/comuna/{id}','ComunaController@destroy');

/*Rutas de direccion*/

Route::post('/direccion', 'DireccionController@store');
Route::put('/direccion/{id}', 'DireccionController@update');
Route::get('/direccion','DireccionController@index');
Route::get('/direccion/{id}','DireccionController@show');
Route::delete('/direccion/{id}','DireccionController@destroy');


/*Rutas de CalleComuna*/

Route::post('/calleComuna', 'CalleComunaController@store');
Route::put('/calleComuna/{id}', 'CalleComunaController@update');
Route::get('/calleComuna','CalleComunaController@index');
Route::get('/calleComuna/{id}','CalleComunaController@show');
Route::delete('/calleComuna/{id}','CalleComunaController@destroy');


/*Rutas de MenuProductoController*/

Route::post('/menuProducto', 'MenuProductoController@store');
Route::post('/menuProducto/{id}/productos', 'MenuProductoController@agregarProducto');
Route::put('/menuProducto/{id}', 'MenuProductoController@update');
Route::put('/menuProducto/{id_menu}/{id_producto}/productos', 'MenuProductoController@cambiarProducto');
Route::get('/menuProducto','MenuProductoController@index');
Route::get('/menuProducto/{id}','MenuProductoController@show');
Route::get('/menuProducto/{id}/productos','MenuProductoController@mostrarProductos');
Route::delete('/menuProducto/{id}','MenuProductoController@destroy');
Route::delete('/menuProducto/{id_menu}/{id_producto}/productos','MenuProductoController@eliminarProducto');


/*Rutas de MenuRestauranteController*/

Route::post('/menuRestaurante', 'MenuRestauranteController@store');
Route::put('/menuRestaurante/{id}', 'MenuRestauranteController@update');
Route::get('/menuRestaurante','MenuRestauranteController@index');
Route::get('/menuRestaurante/{id}','MenuRestauranteController@show');
Route::delete('/menuRestaurante/{id}','MenuRestauranteController@destroy');


/*Rutas de PedidoProductoController*/

Route::post('/pedidoProducto', 'PedidoProductoController@store');
Route::put('/pedidoProducto/{id}', 'PedidoProductoController@update');
Route::get('/pedidoProducto','PedidoProductoController@index');
Route::get('/pedidoProducto/{id}','PedidoProductoController@show');
Route::delete('/pedidoProducto/{id}','PedidoProductoController@destroy');


/*Rutas de HorarioMesaController*/

Route::post('/horarioMesa', 'Horario_MesaController@store');
Route::put('/horarioMesa/{id}', 'Horario_MesaController@update');
Route::get('/horarioMesa','Horario_MesaController@index');
Route::get('/horarioMesa/{id}','Horario_MesaController@show');
Route::delete('/horarioMesa/{id}','Horario_MesaController@destroy');


/*Rutas de HorarioMesaController*/

Route::post('/horarioRestaurante', 'Horario_RestauranteController@store');
Route::put('/horarioRestaurante/{id}', 'Horario_RestauranteController@update');
Route::get('/horarioRestaurante','Horario_RestauranteController@index');
Route::get('/horarioRestaurante/{id}','Horario_RestauranteController@show');
Route::delete('/horarioRestaurante/{id}','Horario_RestauranteController@destroy');














