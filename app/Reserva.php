<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
	protected $table='reservas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'cantidad_personas', 'fecha_reserva', 'rut_cliente', 'nombre_cliente', 'apellido_cliente', 
		'estado_reserva'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function mesas(){
    	return $this->hasMany('App\Mesa');
    }
	public function usuarios(){
    	return $this->belongsTo('App\User');
    }
}
