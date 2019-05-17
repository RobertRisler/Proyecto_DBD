<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //
	protected $table='restaurantes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_restaurante', 'descripcion_rest', 'hora_apertura', 'hora_cierre', 'promedio_valoracion',
		'telefono_restaurante', 'hace_despacho', 'validacion'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function comentarios(){
    	return $this->hasMany('App\Comentario');
    }
	public function mesas(){
    	return $this->hasMany('App\Mesa');
    }
	public function menu_restaurantes(){
    	return $this->hasMany('App\Menu_restaurante');
    }
}
