<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
	protected $table = 'productos';
    //atributos
    //rellenar con atributos
    protected $fillable=['nombre', 'descripcion', 'precio_total', 'tipo', 'disponibilidad'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pedidos()
    {
    	return $this->belongToMany('App\Pedido');
    }
    public function menus()
    {
    	return $this->belongToMany('App\Menu');
    }
}
