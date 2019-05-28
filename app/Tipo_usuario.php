<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    //
	protected $table = 'tipo_usuarios';
    //atributos
    //rellenar con atributos
    protected $fillable = ['nombre'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function usuarios()
    {
    	return $this->hasMany('App\User');
    }
}
