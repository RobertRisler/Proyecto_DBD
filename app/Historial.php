<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
	protected $table = 'historiales';
    //atributos
    //rellenar con atributos
    protected $fillable = ['actividad', 'descripcion', 'fecha_actividad'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function usuario()
    {
    	return $this->belongsTo('App\User');
    }
}
