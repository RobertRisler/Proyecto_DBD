<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos_pedido extends Model
{
    //
	protected $table='productos_pedidos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_pedido', 'id_producto'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pedidos(){
    	return $this->belongsTo('App\Pedido');
    }
	public function productos(){
    	return $this->belongsTo('App\Producto');
    }
}
