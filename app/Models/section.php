<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //------------------Relacion de uno a muchos-------------------------

    public function lessons(){
        return $this->hasMany('App\Models\lesson');
    }

    //------------------Relacion uno a muchos inversa------------------
    public function course(){
        return $this->belongsTo('App\Models\course');
    }
}
