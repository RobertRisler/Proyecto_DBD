<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
	protected $table = 'categorias';
    //atributos
    //rellenar con atributos
    protected $fillable = ['nombre', 'descripcion'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function menus()
    {
    	return $this->hasMany('App\Menu');
    }
}
