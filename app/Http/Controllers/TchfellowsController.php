<?php

namespace App\Http\Controllers;

use App\Tchfellows;
use Illuminate\Http\Request;

class TchfellowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tchfellows = Tchfellows::orderBy('id', 'asc')->get();
        error_log($tchfellows);
        return $tchfellows;
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
     * @param  \App\Tchfellow  $tchfellow
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tchfellows = Tchfellows::find($id);
        return $tchfellows;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tchfellows  $tchfellows
     * @return \Illuminate\Http\Response
     */
    public function edit(Tchfellows $tchfellows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tchfellows  $tchfellows
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tchfellows $tchfellows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tchfellows  $tchfellows
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tchfellows $tchfellows)
    {
        //
    }
}
