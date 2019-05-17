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
    	'nombre_usuario', 'apellido_usuario', 'correo_usuario', 'contrasena'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function comentarios(){
    	return $this->hasMany('App\Comentario');
    }
	public function historials(){
    	return $this->hasMany('App\Historial');
    }
	public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
	public function pedidos(){
    	return $this->hasMany('App\Pedido');
    }
	public function tipo_usuarios(){
    	return $this->belongsTo('App\Tipo_Usuario');
    }
}
