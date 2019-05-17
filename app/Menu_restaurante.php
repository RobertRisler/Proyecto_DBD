<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_restaurante extends Model
{
    //
	protected $table='menu_restaurantes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_menu', 'id_restaurante'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function menus(){
    	return $this->belongsTo('App\Menu');
    }
	public function restaurantes(){
    	return $this->belongsTo('App\Restaurante');
    }
}
