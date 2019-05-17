<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    //
	protected $table='mesas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'cantidad_asientos', 'estado_reservacion'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function reservas(){
    	return $this->belongsTo('App\Reserva');
    }
	public function restaurantes(){
    	return $this->belongsTo('App\Restaurante');
    }
}
