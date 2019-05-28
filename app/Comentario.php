<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
	protected $table = 'comentarios';
    //atributos
    //rellenar con atributos
    protected $fillable = ['mensaje', 'valoracion', 'fecha'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function usuarios()
    {
    	return $this->belongsTo('App\User');
    }

    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante');
    }
}
