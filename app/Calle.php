<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
	protected $table = 'calles';
    protected $fillable = ['nombre', 'numero'];

    public function direcciones()
    {
    	return $this->hasMany('App\Direccion');
    }

    public function restaurantes()
    {
    	return $this->hasMany('App\Restaurante');
    }

    public function calles_comunas()
    {
    	return $this->hasMany('App\Calle_Comuna');
    }
}
