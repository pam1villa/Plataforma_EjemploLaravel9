<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    //-------------------Relacion uno a mcuhos--------------------------
    public function FunctionName(){
        return $this->hasMany('App\Models\Course');
    }
}
