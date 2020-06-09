<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casts;
use Storage;
use Image;
use File;
class CastController extends Controller
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
        $cast = Casts::paginate(10);
        return view('backend.casts.index',compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.casts.create");
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
            'cast_name' => 'required|min:3|',
            'cast_image' =>'sometimes|image|',
            'type' =>'required',
         ]);

        

        if ($request->hasFile('cast_image')) {
            $image = $request->file('cast_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->resize(800,500)->save($location);
            $photo_cast = $filename;
        }

        $cast = new Casts([
        'cast_name'=> $request->get('cast_name'),
        'cast_image'=> $photo_cast,
        'type' => $request->get('type'),

        ]);
        $cast->save();
        return redirect()-> route('cast.index')->with('success','Data Updated');

        
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
        $cast = Casts::find($id);
        return view('backend.casts.edit',compact('cast','id'));
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
            'cast_name' => 'required|min:3|',
            'cast_image' =>'sometimes|image|',
            'type' =>'required',
         ]);
        

        $cast = Casts::find($id);
        $cast->cast_name = $request->get("cast_name");
        $cast->type = $request->get("type");
        //Movie::create($request->except('_token'));
        if ($request->hasFile('cast_image')){
            //add new photo
            $image = $request->file('cast_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->resize(800,500)->save($location);
            $oldphoto_1 = $cast->cast_image;
            $cast->cast_image = $filename;
            File::delete(public_path('photo/'.$oldphoto_1));
            
        }
        

        $cast -> save();
        return redirect()-> route('cast.index')->with('success','Data Updated');
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
        $cast = Casts::findOrFail($id);
        File::delete(public_path('photo/'.$cast->cast_image));
        $cast->delete();
        return redirect()->route('cast.index')->with('success','Data Deleted');
    }
}
