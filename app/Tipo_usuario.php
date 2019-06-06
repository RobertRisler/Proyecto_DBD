<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
	protected $table = 'tipo_usuarios';
    protected $fillable = ['nombre'];
    
    public function usuarios()
    {
    	return $this->hasMany('App\User', 'id_tipo_usuario', 'id');
    }
}

