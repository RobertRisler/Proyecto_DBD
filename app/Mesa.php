<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	protected $table = 'mesas';
    protected $fillable = ['cantidad_asientos'];
    
    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante','id_restaurante','id');
    }
}
