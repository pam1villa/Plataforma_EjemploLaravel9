<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{    
    use HasFactory;

    protected $guarded = ['id', 'status'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //-----------------Relación uno a muchos------------------------
    public function reviews(){
       return $this->hasMany('App\Models\review');
    }

    public function requirements(){
        return $this->hasMany('App\Models\requirement');
    }

    public function goals(){
        return $this->hasMany('App\Models\goal');
    }

    public function audiences(){
        return $this->hasMany('App\Models\audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\section');
    }

   

    //----------------Relacion uno a muchos inversa---------------------------------
    public function teacher(){
        return $this->belongsTo('App\Models\user', 'user_id');
    }

    public function level(){
        return $this->belongsTo('App\Models\level');
    }

    public function category(){
        return $this->belongsTo('App\Models\level');
    }

    public function price(){
        return $this->belongsTo('App\Models\level');
    }

    //----------------Relacion uno a muchos------------------------------ 
    public function students(){
        return $this->belongsToMany('App\Models\user');
    }

    //-------Relacion uno a uno polimorfica-------------------------
    public function image(){
        return $this->morphOne('App\Models\image', 'imageable');
    }

    public function lessons(){
        return $this->hasManyThrough('App\Models\lesson', 'App\Models\Section');
    }

}
