<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['name', 'email', 'password','phone_no'];
    protected $table = "client";
}
