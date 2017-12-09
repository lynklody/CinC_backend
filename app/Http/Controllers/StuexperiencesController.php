<?php

namespace App\Http\Controllers;

use App\Stuexperiences;
use Illuminate\Http\Request;

class StuexperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $stuexperiences = Stuexperiences::orderBy('id')->get();
        error_log($stuexperiences);
        return $stuexperiences;
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
     * @param  \App\Stuexperiences  $stuexperiences
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stuexperiences = Stuexperiences::find($id);
        return $stuexperiences;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stuexperiences  $stuexperiences
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuexperiences $stuexperiences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stuexperiences  $stuexperiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuexperiences $stuexperiences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stuexperiences  $stuexperiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuexperiences $stuexperiences)
    {
        //
    }
}
