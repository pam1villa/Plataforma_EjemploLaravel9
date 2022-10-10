<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const LIKE = 1;
    const DISLIKE = 2;

    //Relacion  uno a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    //Metodo que corresponde a tabla polimorfica:
    public function reactionable(){
        return $this->morphTo();
    }
}

