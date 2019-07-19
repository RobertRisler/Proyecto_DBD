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
    return redirect('/index');
});

Route::get('/M', function () { /*Por el momento */
    return view('vistaRegistroRestaurante');
});

Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@create');

Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@authenticate')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Auth::routes();

Route::get('/index', 'PaginaPrincipalController@index')->name('index');

Route::get('/buscar', 'BuscarController@search')->name('searchProducto');
Route::get('/peticion', 'PeticionController@search')->name('searchPeticion');
Route::put('/peticion/{id}', 'PeticionController@update')->name('peticion.update');

Route::get('/peticion/{id}/edit','PeticionController@edit')->name('peticion.edit');




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/MiPerfil', 'VistaUsuarioController@index');


Route::post('/editarPerfil/{id}', 'UserController@editarPerfil')->name('editarPerfil');

Route::post('/editarRestaurante/{id}', 'RestauranteController@editarRestaurante')->name('editarRestaurante');

Route::post('/nuevoMenu/{id}', 'MenuController@agregarMenu')->name('nuevoMenu');

Route::post('/nuevoProducto', 'ProductoController@agregarProducto')->name('nuevoProducto');

Route::post('/nuevaPeticion/{id}', 'PeticionController@agregarPeticion')->name('nuevaPeticion');

Route::post('/nuevoComentario/{id}', 'ComentarioController@agregarComentario')->name('nuevoComentario');

Route::post('/nuevoRestaurante', 'RestauranteController@nuevoRestaurante')->name('nuevoRestaurante');

Route::post('/asignarRestaurante/{id}', 'PeticionController@aasignarRestaurante')->name('asignarRestaurante');

Route::get('/buscarValoracion', 'BuscarValoracionController@showValoration')->name('searchValoration');

Route::get('/buscarNombre', 'BuscarValoracionController@showName')->name('searchName');

Route::get('/buscarCategoria', 'BuscarValoracionController@showCategory')->name('searchCategory');

Route::get('/buscarUbicacion', 'BuscarValoracionController@showLocation')->name('searchLocation');



/* Rutas entrega 2 */
//route::resource('usuario','UserController');
/*Rutas de usuario*/
Route::get('/usuario', 'UserController@search')->name('search'); 
Route::post('/usuario', 'UserController@store');
Route::put('/usuario/{id}', 'UserController@update')->name('usuario.update');

Route::get('/usuario/{id}/edit','UserController@edit')->name('usuario.edit');
Route::get('/usuario/{id}','UserController@show')->name('usuario.show');
Route::get('/usuario/{id_usuario}/comentarios','UserController@mostrarTotalComentarios');
Route::delete('/usuario/{id}','UserController@destroy')->name('usuario.destroy');

/*Muesta comentarios de un usuario*/
Route::get('/comentariosUsuario/{id}','UserController@mostrarComentarios');

/*Rutas usuario-historial*/
Route::get('/historialUsuario/{id}','UserController@mostrarHistorial');

/*Rutas usuario-comentario*/
Route::post('/usuario/{id_usuario}/{id_restaurante}/comentarios', 'UserController@agregarComentario');
Route::put('/usuario/{id_usuario}/{id_restaurante}/{id_comentario}/comentarios','UserController@modificarComentario');
Route::get('/usuario/{id_usuario}/{id_restaurante}/comentarios','UserController@mostrarComentarios');
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

/*Rutas categoria-menu*/
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

/*Rutas direcciones-restaurantes*/
Route::get('/calleDirecciones/{id}','CalleController@mostrarDirecciones');

/*Rutas calles-restaurantes*/
Route::get('/calleRestaurantes/{id}','CalleController@mostrarRestaurantes');

/*Rutas de restaurante*/
Route::get('/restaurante/{id}/edit','RestauranteController@edit')->name('restaurante.edit');
Route::post('/restaurante', 'RestauranteController@store');
Route::put('/restaurante/{id}', 'RestauranteController@update')->name('restaurante.update');
Route::get('/restaurante', 'RestauranteController@search')->name('searchRestaurante'); 

Route::get('/registroRestaurante', 'RestauranteController@mostrar')->name('registroRestaurante'); 
//Route::get('/restaurante','RestauranteController@index');


Route::get('/reservar','RestauranteController@index')->name('restaurante.index');

Route::get('/restaurante/{id}','RestauranteController@show')->name('restaurante.show');

Route::delete('/restaurante/{id}','RestauranteController@destroy')->name('restaurante.destroy');

/*Rutas restaurante-ubicacion*/
Route::post('/restaurante/ubicacion', 'RestauranteController@crearRestaurante');
Route::put('/restaurante/{id}/ubicacion', 'RestauranteController@modificarRestaurante');
Route::get('/restaurante/{id}/ubicacion','RestauranteController@mostrarRestaurante');
Route::delete('/restaurante/{id}/ubicacion','RestauranteController@eliminarRestaurante');

/*Rutas restaurante-mesas*/
Route::post('/restaurante/{id}/mesas', 'RestauranteController@agregarMesa');
Route::put('/restaurante/{id_restaurante}/{id_mesa}/mesas', 'RestauranteController@cambiarMesa');
Route::get('/restaurante/{id}/mesas','RestauranteController@mostrarMesas');
Route::delete('/restaurante/{id_restaurante}/{id_mesa}/mesas','RestauranteController@eliminarMesa');

/*Rutas de despacho*/
Route::post('/despacho', 'DespachoController@store');
Route::put('/despacho/{id}', 'DespachoController@update');
Route::get('/despacho','DespachoController@index');
Route::get('/despacho/{id}','DespachoController@show');
Route::delete('/despacho/{id}','DespachoController@destroy');

/*Rutas pedido-despacho*/
Route::get('/pedidoDespacho/{id}','DespachoController@mostrarPedido');

/*Rutas de pago*/
Route::post('/pago', 'PagoController@store');
Route::put('/pago/{id}', 'PagoController@update');
Route::get('/pago','PagoController@index');
Route::get('/pago/{id}','PagoController@show');
Route::delete('/pago/{id}','PagoController@destroy');

/*Rutas de reserva*/
Route::post('/reservaCreate', 'ReservaController@crearReserva');
Route::put('/reserva/{id}', 'ReservaController@update');
Route::get('/reserva','ReservaController@index');
Route::get('/reserva/{id}','ReservaController@show');
Route::delete('/reserva/{id}','ReservaController@destroy');

/*Rutas mesa-reserva*/
Route::get('/mesasReserva/{id}','ReservaController@mostrarMesas');

/*Rutas de mesa*/
Route::post('/mesa', 'MesaController@store');
Route::put('/mesa/{id}', 'MesaController@update');
Route::get('/mesa','MesaController@index');
Route::get('/mesa/{id}','MesaController@show');
Route::delete('/mesa/{id}','MesaController@destroy');

/*Rutas de pedido*/

Route::get('/enviarPedido', 'PedidoController@enviarPedido')->name('enviarPedido');
/*Route::get('/enviarPedido', function (){return view('vistaUbicacionPedido');});

*/use Illuminate\Http\Request;/*
use App\Pedido;
use App\User;
use App\Pago;
use App\Despacho;
use App\Calle;
use App\Comuna;
use App\Ciudad;
use App\Direccion;
use App\Http\Requests\PedidoRequest;
*/use App\Http\Controllers\PedidoController;

Route::get('/enviarPedido/result', function (Request $request){
	/*$alias = $request->input('alias');
	$nombre_ciudad = $request->input('nombre_ciudad');
	$nombre_comuna = $request->input('nombre_comuna');
	$nombre_calle = $request->input('nombre_calle');
	$numero = $request->input('numero');
	$telefono = $request->input('telefono');*/
	return PedidoController::enviarPedido($request);
	})->name('/enviarPedido/result');/**/
						
Route::post('/pedido/{id}', 'MenuController@agregarMenu');
Route::put('/pedido/{id}', 'PedidoController@update');
Route::get('/pedido','PedidoController@index');
Route::get('/pedido/{id}','PedidoController@show');
Route::delete('/pedido/{id}','PedidoController@destroy');

/*Rutas usuario-pedido*/
Route::get('/usuarioPedido/{id}','PedidoController@mostrarUsuario');

/*Rutas despacho-pedido*/
Route::get('/despachoPedido/{id}','PedidoController@mostrarDespacho');

/*Rutas de comentario*/
Route::post('/comentario', 'ComentarioController@store');
Route::put('/comentario/{id}', 'ComentarioController@update');
Route::get('/comentario','ComentarioController@index');
Route::get('/comentario/{id}','ComentarioController@show');
Route::delete('/comentario/{id}','ComentarioController@destroy');

/*Rutas comentario-usuario*/
Route::get('/comentario/usuario/{id}','ComentarioController@mostrarComentarioUsuario');

/*Rutas comentario-restaurante*/
Route::get('/comentario/restaurante/{id}','ComentarioController@mostrarComentarioRestaurante');

/*Rutas de menu*/
Route::post('/menu', 'MenuController@store');
Route::put('/menu/{id}', 'MenuController@update');
Route::get('/menu','MenuController@index');
Route::get('/menu/{id}','MenuController@show');
Route::delete('/menu/{id}','MenuController@destroy');

/*Rutas menu-categoria*/
Route::post('/menu/{id}', 'MenuController@agregarMenu');
Route::put('/menu/{id_categoria}/{id_menu}/categorias', 'MenuController@modificarMenu');
Route::get('/menu/{id}/categorias','MenuController@mostrarMenus');
Route::delete('/menu/{id_categorias}/{id_menu}/categorias','MenuController@eliminarMenu');

/*Rutas de historial*/
Route::post('/historial', 'HistorialController@store');
Route::put('/historial/{id}', 'HistorialController@update');
Route::get('/historial','HistorialController@index');
Route::get('/historial/{id}','HistorialController@show');
Route::delete('/historial/{id}','HistorialController@destroy');

/*Rutas usuario-historial*/
Route::get('/usuarioHistorial/{id}','HistorialController@mostrarUsuario');

/*Rutas de ciudad*/
Route::post('/ciudad', 'CiudadController@store');
Route::put('/ciudad/{id}', 'CiudadController@update');
Route::get('/ciudad','CiudadController@index');
Route::get('/ciudad/{id}','CiudadController@show');
Route::delete('/ciudad/{id}','CiudadController@destroy');

/*Rutas comuna-ciudad*/
Route::get('/comunaCiudad/{id}','CiudadController@mostrarComunasCiudad');

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
Route::put('/menuProducto/{id}', 'MenuProductoController@update');
Route::get('/menuProducto','MenuProductoController@index');
Route::get('/menuProducto/{id}','MenuProductoController@show');
Route::delete('/menuProducto/{id}','MenuProductoController@destroy');

/*Rutas menu-producto*/
Route::post('/menuProducto/{id}/productos', 'MenuProductoController@agregarProducto');
Route::put('/menuProducto/{id_menu}/{id_producto}/productos', 'MenuProductoController@cambiarProducto');
Route::get('/menuProducto/{id}/productos','MenuProductoController@mostrarProductos');
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

/*Rutas horario_mesa-mesa*/
Route::post('/horarioMesa/{id}', 'Horario_MesaController@agregarhorario_mesa');
Route::put('/horarioMesa/{id_mesa}/{id_horarioMesa}/mesas', 'Horario_MesaController@modificarhorario_mesa');
Route::get('/horarioMesa/{id}/mesas','Horario_MesaController@mostrarhorario_mesas');
Route::delete('horarioMesa/{id_mesa}/{id_horario_mesa}/mesas','Horario_MesaController@eliminarhorario_mesa');

/*Rutas de HorarioRestauranteController*/
Route::post('/horarioRestaurante', 'Horario_RestauranteController@store');
Route::put('/horarioRestaurante/{id}', 'Horario_RestauranteController@update');
Route::get('/horarioRestaurante','Horario_RestauranteController@index');
Route::get('/horarioRestaurante/{id}','Horario_RestauranteController@show');
Route::delete('/horarioRestaurante/{id}','Horario_RestauranteController@destroy');







