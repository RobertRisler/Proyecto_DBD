<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    protected $fillable = ['alias'];

    public function usuarios()
    {
    	return $this->belongsTo('App\User','id_usuario','id');
    }

    public function calles()
    {
    	return $this->belongsTo('App\Calle','id_calle','id');
    }
}
