<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario_Restaurante extends Model
{
    protected $table = 'horarios_restaurantes';
    protected $fillable = ['dia_semana', 'hora_apertura', 'hora_cierre'];

    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante');
    }
}
