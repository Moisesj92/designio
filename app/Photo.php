<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //Evadir la proteccion contra asignacion masiva
    protected $guarded = [];
}
