<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
	protected $table = 'pedidos';
    //atributos
    //rellenar con atributos
    protected $fillable = ['nombre_cliente', 'apellido_cliente', 'rut_cliente', 'correo_cliente',
    'fecha', 'tipo_entrega', 'hora_estimada', 'estado'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function usuarios()
    {
    	return $this->belongsTo('App\User');
    }

    public function despachos()
    {
    	return $this->belongsTo('App\Despacho');
    }

    public function productos()
    {
    	return $this->belongToMany('App\Producto');
    }

    public function pagos()
    {
        return $this->hasOne('App\Pago');
    }
}
