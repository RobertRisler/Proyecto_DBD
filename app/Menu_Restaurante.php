<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Restaurante extends Model
{
    protected $table = 'menus_restaurantes';

    public function menus()
    {
        return $this->belongsTo('App\Menu');
    }

    public function restaurentes()
    {
        return $this->belongsTo('App\Restaurante');
    }
}
