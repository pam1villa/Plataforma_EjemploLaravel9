<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class description extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //------------------Relacion de uno a uno inversa------------------------
    public function lesson(){
        return $this->belongsTo('App\Models\lesson');
    }
}
