<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casts extends Model
{
    
	protected $fillable = ['cast_name','cast_image','type'];
	protected $table = "casts";

    public function movies()
    {
    	return $this->belongsToMany('App\Movie','cast_movie','cast_id','movie_id');
    }
}
