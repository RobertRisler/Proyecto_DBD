<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Producto extends Model
{
    protected $table = 'menus_productos';

    public function menus()
    {
        return $this->belongsTo('App\Menu', 'id_menu', 'id');
    }

    public function productos()
    {
        return $this->belongsTo('App\Producto', 'id_producto', 'id');
    }
}
