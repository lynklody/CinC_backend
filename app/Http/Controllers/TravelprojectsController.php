<?php

namespace App\Http\Controllers;

use App\Travelprojects;
use Illuminate\Http\Request;

class TravelprojectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelprojects = Travelprojects::orderBy('id', 'asc')->get();
        error_log($travelprojects);
        return $travelprojects;
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
     * @param  \App\Travel_Project  $travel_Project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travelprojects = Travelprojects::find($id);
        return $travelprojects;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travelprojects  $travelprojects
     * @return \Illuminate\Http\Response
     */
    public function edit(Travelprojects $travelprojects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travelprojects  $travelprojects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travelprojects $travelprojects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travelprojects  $travelprojects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travelprojects $travelprojects)
    {
        //
    }
}
