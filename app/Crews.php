<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crews extends Model
{
    protected $fillable = ['crew_name','crew_image','type'];
    protected $table = "crews";
}
