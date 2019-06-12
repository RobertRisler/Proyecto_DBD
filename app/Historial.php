<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
	protected $table = 'historiales';
    protected $fillable = ['actividad', 'descripcion', 'fecha_actividad','id_usuario'];
    
    public function usuario()
    {
    	return $this->belongsTo('App\User', 'id_usuario','id');
    }
}
