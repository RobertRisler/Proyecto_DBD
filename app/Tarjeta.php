<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
	protected $table = 'tarjetas';
    protected $fillable = ['CuatroDigitos', 'NumeroCuotas', 'Tipo'];
    
    public function pagos()
    {
    	return $this->hasMany('App\Pago');
    }
}
