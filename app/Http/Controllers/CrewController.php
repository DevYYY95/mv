<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crews;
use Storage;
use Image;
use File;

class CrewController extends Controller
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
        $crew = Crews::paginate(10);
        return view('backend.crews.index',compact('crew'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.crews.create");
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
            'crew_name' => 'required|min:3|',
            'crew_image' =>'sometimes|image|',
            'type' => 'required'
         ]);

        

        if ($request->hasFile('crew_image')) {
            $image = $request->file('crew_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->resize(800,500)->save($location);
            $photo_crew = $filename;
        }

        $crew = new Crews([
        'crew_name'=> $request->get('crew_name'),
        'crew_image'=> $photo_crew,
        'type' => $request->get('type'),

        ]);
        $crew->save();
        return redirect()-> route('crew.index')->with('success','Data Updated');

        
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
        $crew = Crews::find($id);
        return view('backend.crews.edit',compact('crew','id'));
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
            'crew_name' => 'required|min:3|',
            'crew_image' =>'sometimes|image|',
            'type' => 'required',
         ]);
        

        $crew = Crews::find($id);
        $crew->crew_name = $request->get("crew_name");
        $crew->type = $request->get("type");
        //Movie::create($request->except('_token'));
        if ($request->hasFile('crew_image')){
            //add new photo
            $image = $request->file('crew_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('photo/'.$filename);
            Image::make($image)->resize(800,500)->save($location);
            $oldphoto_2 = $crew->crew_image;
            $crew->crew_image = $filename;
            File::delete(public_path('photo/'.$oldphoto_2));
            
        }
        

        $crew -> save();
        return redirect()-> route('crew.index')->with('success','Data Updated');
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
        $crew = Crews::findOrFail($id);
        File::delete(public_path('photo/'.$crew->crew_image));
        $crew->delete();
        return redirect()->route('crew.index')->with('success','Data Deleted');
    }
}
