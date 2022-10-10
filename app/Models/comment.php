<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    //Metodo que corresponde a tabla polimorfica:
    public function commentable(){
        return $this->morphTo();
    }

    //Relacion  uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\user');
    }

     //-------------Relacion de uno a muchos polimorfica (para que el usuario pueda comentar otros comentarios):
     public function comments(){
        return $this->morphToMany('App\Models\comment', 'commentable');
    }
    //Para que el comentario pueda recibir reacciones
    public function reactions(){
        return $this->morphToMany('App\Models\reaction', 'reactionable');
    }
}
