<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';
    protected $fillable = ['nombre', 'descripcion'];
    
    public function menus()
    {
    	return $this->hasMany('App\Menu','id_categoria','id');
    }
}
