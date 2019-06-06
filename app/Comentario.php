<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
	protected $table = 'comentarios';
    protected $fillable = ['mensaje', 'valoracion', 'fecha'];
    
    public function usuarios()
    {
    	return $this->belongsTo('App\User','id_usuario','id');
    }

    public function restaurantes()
    {
    	return $this->belongsTo('App\Restaurante', 'id_restaurante','id');
    }
}
