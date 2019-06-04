<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	protected $table = 'mesas';
    protected $fillable = ['cantidad_asientos', 'estado_reservacion'];
    
    public function reservas()
    {
    	return $this->belongsTo('App\Reserva');
    }
    
    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante');
    }

    public function horarios_mesas()
    {
    	return $this->hasMany('App\Horarios_Mesas');
    }
}
