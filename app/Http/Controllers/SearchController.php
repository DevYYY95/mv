<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function index(){
    	$search = Input::get('search');
    	// dd($search);
    	if ($search != '') {
    		$movie = Movie::where('type','LIKE','%'.$search.'%')->get();

    		if (count($movie) > 0) {
    			return view('frontend.movie.search')->withDetails($movie)->withQuery($search);
    		}
    	}
    	return view('frontend.movie.search')->withMessage("No Item Match");
    }

    public function detail($id)
    {
        // echo $id;
        $movie = Movie::find($id);
        return view('frontend.movie.detail',compact("movie"));
    }
}
