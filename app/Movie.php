<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['movie_name','movie_image','description','type','duration','time','start_date','end_date','status'];
    protected $table = "movies";

    public function casts()
    {
    	return $this->belongsToMany('App\Casts','cast_movie','movie_id','cast_id');
    }

    public function cinemas()
    {
    	return $this->belongsToMany('App\Cinema','cinema_movie','movie_id','cinema_id');
    }
}
