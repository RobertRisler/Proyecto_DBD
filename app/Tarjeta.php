<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
	protected $table = 'tarjetas';
    //atributos
    //rellenar con atributos
    protected $fillable = ['CuatroDigitos', 'NumeroCuotas', 'Tipo'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pagos()
    {
    	return $this->hasMany('App\Pago');
    }
}
