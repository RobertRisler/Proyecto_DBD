<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    protected $fillable = ['nombre'];

    public function comunas()
    {
    	return $this->hasMany('App\Comuna');
    }
}
