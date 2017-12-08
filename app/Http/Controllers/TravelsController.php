<?php

namespace App\Http\Controllers;

use App\Travels;
use Illuminate\Http\Request;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travels::orderBy('id')->get();
        error_log($travels);
        return $travels;
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
     * @param  \App\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travels = Travels::find($id);
        return $travels;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function edit(Travels $travels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travels $travels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travels  $travels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travels $travels)
    {
        //
    }
}
