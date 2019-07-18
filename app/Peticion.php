<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    protected $table = 'peticiones';
    protected $fillable=['descripcion', 'validacion'];

    public function usuario()
    {
    	return $this->belongsTo('App\User', 'id_usuario', 'id');
    }
    public function restaurante()
    {
    	return $this->belongsTo('App\Restaurante', 'id_restaurante', 'id');
    }
}
