<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_Producto extends Model
{
    protected $table = 'pedidos_productos';

    public function pedidos()
    {
        return $this->belongsTo('App\Pedido');
    }

    public function productos()
    {
        return $this->belongsTo('App\Producto');
    }
}
