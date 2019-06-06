<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/
	protected $table='usuarios';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre', 'apellido', 'correo', 'contrasena', 'id_tipo_usuario',
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function comentarios()
    {
    	return $this->hasMany('App\Comentario', 'id_usuario','id');
    }

    public function historiales()
    {
    	return $this->hasMany('App\Historial','id_usuario','id');
    }

    public function reservas()
    {
    	return $this->hasMany('App\Reserva','id_usuario','id');
    }

    public function pedidos()
    {
    	return $this->hasMany('App\Pedido', 'id_usuario','id');
    }

    public function tipo_usuario()
    {
    	return $this->hasOne('App\Tipo_usuario', 'id','id_tipo_usuario');
    }

    public function direcciones()
    {
    	return $this->hasMany('App\Direccion', 'id_usuario','id');
    }
}
