<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Casts;
use App\Cinema;
use Storage;
use Image;
use File;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $movie =  Movie::with('casts','cinemas')->get();
        return view('backend.movie.index',compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cast = Casts::all();
        $cinema = Cinema::all();
        return view("backend.movie.create",compact("cast","cinema"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        $request->validate([
            'movie_name' => 'required|min:3|',
            'movie_image' =>'sometimes|image|',
            'description' => 'required',
            'type'=>'required',
            'duration' =>'required',
            'time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
         ]);

        if ($request->hasFile('movie_image')) {
            $image = $request->file('movie_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->save($location);
            $photo = $filename;
        }

        $movie = new Movie([
        'movie_name'=> $request->get('movie_name'),
        'movie_image'=> $photo,
        'description'=>$request->get('description'),
        'type'=>$request->get('type'),
        'duration'=>$request->get('duration'),
        'time'=>$request->get('time'),
        'start_date'=>$request->get('start_date'),
        'end_date'=>$request->get('end_date'),
        'status'=>$request->get('status'),

        ]);

        
        $movie -> save();
        $movie -> casts()->sync($request->states ,false);
        $movie -> cinemas()->sync($request->tags ,false);
        return redirect()-> route('movie.index')->with('success','Data Updated');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $cast = Casts::all();
        $cinema = Cinema::all();
        return view('backend.movie.edit',compact('movie','cast','cinema','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'movie_name' => 'required|min:3|',
            'movie_image' =>'sometimes|image|',
            'description' => 'required',
            'type'=>'required',
            'duration'=>'required',
            'time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
         ]);
        

        $movie = Movie::find($id);
        $movie->movie_name = $request->get("movie_name");
        $movie->description = $request->get("description");
        $movie->type = $request->get("type");
        $movie->duration = $request->get("duration");
        $movie->time = $request->get("time");
        $movie->start_date = $request->get("start_date");
        $movie->end_date = $request->get("end_date");
        //Movie::create($request->except('_token'));
        if ($request->hasFile('movie_image')){
            //add new photo
            $image = $request->file('movie_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->resize(800,500)->save($location);
            $oldphoto = $movie->movie_image;
            $movie->movie_image = $filename;
            File::delete(public_path('photo/'.$oldphoto));
            
        }
        
        if (isset($request->states)) {
            $movie->casts()->sync($request->states);
        }else{
            $movie->casts()->sync(array());
        } 
        

        if (isset($request->tags)) {
            $movie->cinemas()->sync($request->tags);
        }else{
            $movie->cinemas()->sync(array());
        }

        $movie -> save();
        return redirect()-> route('movie.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $destinationPath = Storage::disk('photo');
        $movie = Movie::findOrFail($id);
        File::delete(public_path('photo/'.$movie->movie_image));
        $movie->delete();
        return redirect()->route('movie.index')->with('success','Data Deleted');
    }
}
