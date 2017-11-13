<?php

namespace App\Http\Controllers;

use App\Travel_Project;
use Illuminate\Http\Request;

class Travel_ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel_projects = Travel_Project::orderBy('id', 'asc')->get();
        error_log($travel_projects);
        return $travel_projects;
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
        $travel_project = Travel_Project::find($id);
        return $travel_project;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel_Project  $travel_Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel_Project $travel_Project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel_Project  $travel_Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel_Project $travel_Project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel_Project  $travel_Project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel_project = Travel_Project::find($id);
        $travel_project->delete();
        return 'success';
    }
}
