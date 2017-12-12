<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $jobs = Jobs::orderBy('id')->get();
        error_log($jobs);
        return $jobs;
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
        $jobs = new Jobs;
        $jobs->title = request('title');
        $jobs->job_description = request('description');
        $jobs->requirements = request('requirements'); 
        $jobs->employer = request('employer');
        $jobs->employer_description = request('employerDesc');
        $jobs->majors = request('majors');
        error_log($jobs);
        $jobs->save();
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Jobs::find($id);
        return $jobs;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        $jobs->title = request('title');
        $jobs->job_description = request('description');
        $jobs->requirements = request('requirements'); 
        $jobs->employer = request('employer');
        $jobs->employer_description = request('employerDesc');
        $jobs->majors = request('majors');
        $jobs->save();
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs = Jobs::find($id);
        $jobs->delete();
        return 'success';
    }
}
