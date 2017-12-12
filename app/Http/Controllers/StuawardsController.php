<?php

namespace App\Http\Controllers;

use App\Stuawards;
use Illuminate\Http\Request;

class StuawardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $stuawards = Stuawards::orderBy('id')->get();
        error_log($stuawards);
        return $stuawards;
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
        
        $stuawards = new Stuawards;
        $stuawards->title = request('title');
        $stuawards->description = request('description');
        $stuawards->grade = request('grade'); 
        $stuawards->stu_name = request('stu_name');
        $stuawards->major = request('major');

        error_log($stuawards);
        $stuawards->save();
        return redirect('/stuawards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stuawards  $stuawards
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stuawards = Stuawards::find($id);
        return $stuawards;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stuawards  $stuawards
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuawards $stuawards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stuawards  $stuawards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuawards $stuawards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stuawards  $stuawards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuawards $stuawards)
    {
        //
    }
}
