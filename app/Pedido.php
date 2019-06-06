<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    
    protected $fillable = ['nombre_cliente', 'apellido_cliente', 'rut_cliente', 'correo_cliente',
    'fecha', 'tipo_entrega', 'hora_estimada', 'estado'];
    
    public function usuarios()
    {
    	return $this->belongsTo('App\User','id_usuario','id');
    }

    public function despachos()
    {
    	return $this->hasMany('App\Despacho','id','id_despacho');
    }

    public function pedidos_productos()
    {
    	return $this->hasMany('App\Pedido_Producto');
    }

    public function pagos()
    {
        return $this->hasOne('App\Pago','id','id_pago');
    }
}
