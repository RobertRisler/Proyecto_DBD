<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	protected $table = 'mesas';
    protected $fillable = ['cantidad_asientos'];
    
    public function reservas()
    {
        return $this->belongsTo('App\Reserva','id_reserva','id');
    }
    
    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante','id_restaurante','id');
    }

    public function horarios_mesas()
    {
    	return $this->hasMany('App\Horario_Mesa','id_mesa','id');
    }
}
