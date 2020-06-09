<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        
        return view('layouts.login-master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function show(AdminController $adminController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminController $adminController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminController $adminController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminController $adminController)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::guard('guest')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'layouts.login-master' ));
    }
}
