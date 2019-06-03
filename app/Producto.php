<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    
    protected $fillable=['nombre', 'descripcion', 'precio_total', 'tipo', 'disponibilidad'];
    
    public function pedidos_productos()
    {
    	return $this->hasMany('App\Pedido_Producto');
    }
    public function menus_productos()
    {
    	return $this->hasMany('App\Menu_Producto');
    }
}
