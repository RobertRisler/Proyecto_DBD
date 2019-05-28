<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
	protected $table = 'pagos';
    //atributos
    //rellenar con atributos
    protected $fillable = ['tipo', 'monto', 'fecha'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function tarjetas()
    {
    	return $this->belongsTo('App\Tarjeta');
    }

    public function pedidos()
    {
    	return $this->belongsTo('App\Pedido');
    }
}
