<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle_Comuna extends Model
{
    protected $table = 'calles_comunas';

    public function calles()
    {
        return $this->belongsTo('App\Calle');
    }

    public function comunas()
    {
        return $this->belongsTo('App\Comuna');
    }
}
