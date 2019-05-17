<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos_menu extends Model
{
    //
	protected $table='productos_menus';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_menu', 'id_producto'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function menus(){
    	return $this->belongsTo('App\Menu');
    }
	public function productos(){
    	return $this->belongsTo('App\Producto');
    }
}
