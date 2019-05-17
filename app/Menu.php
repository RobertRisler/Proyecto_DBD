<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
	protected $table='menus';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_menu', 'descripcion_menu', 'cantidad_productos'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function categorias(){
    	return $this->belongsTo('App\Categoria');
    }
	public function menu_restaurantes(){
    	return $this->hasMany('App\Menu_restaurante');
    }
	public function productos_menus(){
    	return $this->hasMany('App\Productos_menu');
    }
}
