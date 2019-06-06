<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    
    protected $fillable = ['nombre', 'descripcion', 'cantidad_productos'];
    
    public function categorias()
    {
    	return $this->belongsTo('App\Categoria', 'id_categoria','id');
    }

    public function menus_restaurantes()
    {
    	return $this->hasMany('App\Menu_Restaurante');
    }

    public function menus_productos()
    {
    	return $this->hasMany('App\Menu_Producto');
    }
}
