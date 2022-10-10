<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class requirement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //------------------Relacion uno a muchos inversa------------------
    public function course(){
        return $this->belongsTo('App\Models\course');
    }
}
