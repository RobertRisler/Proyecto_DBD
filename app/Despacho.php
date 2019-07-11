<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
	protected $table = 'despachos';
    protected $fillable = ['nombre_repartidor', 'rut_repartidor', 'tiempo_estimado',
    'estado_despacho', 'hora_despachado'];
    
    public function pedidos()
    {
    	return $this->hasOne('App\Pedido','id_despacho','id');
    }
	
	public function calles()
    {
        return $this->belongsTo('App\Calle');
    }
}
