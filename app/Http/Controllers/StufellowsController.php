<?php

namespace App\Http\Controllers;

use App\Stufellows;
use Illuminate\Http\Request;

class StufellowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stufellows = Stufellows::orderBy('id')->get();
        error_log($stufellows);
        return $stufellows;
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
     * @param  \App\Stufellow  $stufellow
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stufellows = Stufellows::find($id);
        return $stufellows;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stufellows  $stufellows
     * @return \Illuminate\Http\Response
     */
    public function edit(Stufellows $stufellows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stufellows  $stufellows
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stufellows $stufellows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stufellows  $stufellows
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stufellows $stufellows)
    {
        //
    }
}
