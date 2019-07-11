<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{

	protected $table = 'calles';
    protected $fillable = ['nombre', 'numero'];

    public function direcciones()
    {
    	return $this->hasMany('App\Direccion','id_calle','id');
    }

    public function restaurantes()
    {
    	return $this->hasMany('App\Restaurante','id_calle','id');
    }

    public function calles_comunas()
    {
    	return $this->hasMany('App\Calle_Comuna', 'id_calle','id');
    }

	public function despachos()
    {
    	return $this->hasMany('App\Despacho','id_despacho','id');
    }
}
