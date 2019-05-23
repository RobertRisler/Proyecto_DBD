<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
	protected $table='productos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_producto', 'descripcion_producto', 'precio_total', 'tipo_producto', 'disponibilidad_producto'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pedidos(){
    	return $this->belongToMany('App\Pedido');
    }
	public function menus(){
    	return $this->belongToMany('App\Menu');
    }
}
