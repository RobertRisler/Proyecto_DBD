<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //
	protected $table = 'restaurantes';
    //atributos
    //rellenar con atributos
    protected $fillable = [
        'nombre', 'descripcion', 'promedio_valoracion', 'telefono', 'hace_despacho', 'validacion'];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function comentarios()
    {
    	return $this->hasMany('App\Comentario','id_restaurante','id');
    }

    public function mesas()
    {
    	return $this->hasMany('App\Mesa','id_restaurante','id');
    }

    public function menus_restaurantes()
    {
    	return $this->hasMany('App\Menu_Restaurante', 'id_restaurante', 'id');
    }

    public function menus()
    {
    	return $this->hasMany('App\Menu', 'id_restaurante', 'id');
    }

    public function calles()
    {
    	return $this->belongsTo('App\Calle','id_calle','id');
    }
    
    public function horarios_restaurantes()
    {
    	return $this->hasMany('App\Horario_Restaurante');
    }

    public function pedidos()
    {
    	return $this->hasMany('App\Pedido','id_pedido','id');
    }

    public function peticion()
    {
    	return $this->belongsTo('App\Peticion', 'id', 'id_restaurante');
    }
}
