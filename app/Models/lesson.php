<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //------------------Relacion de uno a uno------------------------
    public function description(){
        return $this->hasOne('App\Models\description');
    }

    //------------------Relacion de uno a muchos inversa-------------------------

    public function section(){
        return $this->belongsTo('App\Models\section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\platform');
    }

    //------------------Relacion de muchos a muchos------------------------
    public function users(){
        return $this->belongsToMany('App\Models\user');
    }

    //------------------Relacion de uno a uno polimorfica------------------------
    public function resource(){
        //este segundo parametro que recibe corresponde a el nombre del metodo que defini en
        //en el modelo reaction
        return $this->morphOne('App\Models\resource', 'resourceable');
    }

      //------------------Relacion de uno a muchos polimorfica------------------------
    public function comments(){
        return $this->morphMany('App\Models\reaction', 'reactionable');
    }
}
