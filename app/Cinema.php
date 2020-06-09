<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = ['cinema_name','address','cinema_phone'];
	protected $table = "cinemas";

	public function movies()
    {
    	return $this->belongsToMany('App\Movie','cinema_movie','cinema_id','movie_id');
    }
	
}
