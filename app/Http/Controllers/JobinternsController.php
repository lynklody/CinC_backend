<?php

namespace App\Http\Controllers;

use App\Jobinterns;
use Illuminate\Http\Request;

class JobinternsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobinterns = Jobinterns::orderBy('id')->get();
        error_log($jobinterns);
        return $jobinterns;
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
     * @param  \App\Job_Intern  $job_Intern
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobinterns = Jobinterns::find($id);
        return $jobinterns;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobinterns  $jobinterns
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobinterns $jobinterns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobinterns  $jobinterns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobinterns $jobinterns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobinterns  $jobinterns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobinterns $jobinterns)
    {
        //
    }
}
