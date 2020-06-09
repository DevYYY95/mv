<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cinema;

class CinemaController extends Controller
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
        $cinema = Cinema::paginate(10);
        return view('backend.cinema.index',compact('cinema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("backend.cinema.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'cinema_name' => 'required',
            'address' => 'required',
            'cinema_phone' => 'required',
         ]);

        $cinema = new Cinema([
        'cinema_name'=> $request->get('cinema_name'),
        'address'=> $request->get('address'),
        'cinema_phone'=> $request->get('cinema_phone'),

        ]);

        $cinema->save();
        return redirect()-> route('cinema.index')->with('success','Data Updated');
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
        $cinema = Cinema::find($id);
        return view('backend.cinema.edit',compact('cinema','id'));
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
            'cinema_name' => 'required',
            'address' => 'required',
            'cinema_phone' => 'required',
         ]);

        $cinema = Cinema::find($id);
        $cinema->cinema_name = $request->get("cinema_name");
        $cinema->address = $request->get("address");
        $cinema->cinema_phone = $request->get("cinema_phone");

        $cinema -> save();
        return redirect()-> route('cinema.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cinema = Cinema::findOrFail($id);
        $cinema->delete();
        return redirect()->route('cinema.index')->with('success','Data Deleted');
    }
}
