<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //------------------Relacion de uno a muchos inversa-------------------------

    public function lessons(){
        return $this->hasMany('App\Models\lesson');
    }
}
