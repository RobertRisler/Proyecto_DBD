<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
	protected $table='tarjetas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'CuatroDigitos_tarjeta', 'NumeroCuotas_tarjeta', 'Tipo_Tarjeta'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pagos(){
    	return $this->hasMany('App\Pago');
    }
}
