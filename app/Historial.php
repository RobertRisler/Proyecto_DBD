<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
	protected $table='historials';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'actividad', 'descripcion', 'fecha_actividad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function usuarios(){
    	return $this->belongsTo('App\User');
    }
}
