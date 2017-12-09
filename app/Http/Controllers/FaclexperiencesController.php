<?php

namespace App\Http\Controllers;

use App\Faclexperiences;
use Illuminate\Http\Request;

class FaclexperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $faclexperiences = Faclexperiences::orderBy('id')->get();
        error_log($faclexperiences);
        return $faclexperiences;
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
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faclexperiences = Faclexperiences::find($id);
        return $faclexperiences;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function edit(Faclexperiences $faclexperiences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faclexperiences $faclexperiences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faclexperiences $faclexperiences)
    {
        //
    }
}
