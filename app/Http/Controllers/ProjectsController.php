<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::orderBy('id')->get();
        error_log($projects);
        return $projects;
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
        
        $projects = new Projects;
        $projects->title = request('title');
        $projects->description = request('description');
        $projects->department = request('department'); 
        $projects->prof_name = request('prof_name');
        $projects->majors = request('majors');

        error_log($projects);
        $projects->save();
        return redirect('/projects');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Projects::find($id);
        return $projects;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        $projects = Projects::find($id);
        $projects->title = request('title');
        $projects->description = request('description');
        $projects->department = request('department'); 
        $projects->prof_name = request('prof_name');
        $projects->majors = request('majors');

        error_log($projects);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);
        $projects->delete();
        return 'success';
    }
}
