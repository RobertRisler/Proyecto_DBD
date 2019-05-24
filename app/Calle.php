<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
	protected $table = 'calles';
    protected $fillable = ['nombre', 'numero'];
}
