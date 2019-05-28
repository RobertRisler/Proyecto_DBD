<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    //
	protected $table = 'despachos';
    //atributos
    //rellenar con atributos
    protected $fillable = ['nombre_repartidor', 'rut_repartidor', 'tiempo_estimado',
    'estado_despacho', 'hora_despachado'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pedidos()
    {
    	return $this->hasOne('App\Pedido');
    }
}
