<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
<<<<<<< HEAD
    //
=======
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
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
}
