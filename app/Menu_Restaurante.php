<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Restaurante extends Model
{
    protected $table = 'menus_restaurantes';

    public function menus()
    {
        return $this->belongsTo('App\Menu', 'id_menu', 'id');
    }

    public function restaurantes()
    {
        return $this->belongsTo('App\Restaurante', 'id_restaurante', 'id');
    }
}
