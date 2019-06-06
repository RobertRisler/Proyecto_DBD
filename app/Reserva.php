<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
	protected $table = 'reservas';
    protected $fillable=['cantidad_personas', 'fecha_reservacion', 'rut_cliente',
    'nombre_cliente', 'apellido_cliente', 'estado'];
    
    public function mesas()
    {
    	return $this->hasMany('App\Mesa','id_reserva','id');
    }
    public function usuarios()
    {
    	return $this->belongsTo('App\User', 'id_usuario','id');
    }
}
