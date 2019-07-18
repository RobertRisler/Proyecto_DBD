<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{

	protected $table = 'comunas';
    protected $fillable = ['nombre'];

    public function calles_comunas()
    {
    	return $this->hasMany('App\Calle_Comuna','id','id_comuna');
    }

    public function ciudades()
    {
    	return $this->belongsTo('App\Ciudad','id_ciudad','id');
    }
}
