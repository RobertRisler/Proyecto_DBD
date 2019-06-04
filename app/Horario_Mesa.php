<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario_Mesa extends Model
{
    protected $table = 'horarios_mesas';
    protected $fillable = ['hora_inicio', 'hora_fin', 'estado_reservacion'];

    public function mesas()
    {
    	return $this->belongsTo('App\Mesa');
    }
}
