<?php

namespace App\Http\Controllers;

use App\Stufellow;
use Illuminate\Http\Request;

class StufellowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stufellows = Stufellow::orderBy('id', 'asc')->get();
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
        $stufellow = Stufellow::find($id);
        return $stufellow;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stufellow  $stufellow
     * @return \Illuminate\Http\Response
     */
    public function edit(Stufellow $stufellow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stufellow  $stufellow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stufellow $stufellow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stufellow  $stufellow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stufellow = Stufellow::find($id);
        $stufellow->delete();
        return 'success';
    }
}
