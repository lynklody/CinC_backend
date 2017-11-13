<?php

namespace App\Http\Controllers;

use App\Tchfellow;
use Illuminate\Http\Request;

class TchfellowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tchfellows = Tchfellow::orderBy('id', 'asc')->get();
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
        $tchfellow = Tchfellow::find($id);
        return $tchfellow;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tchfellow  $tchfellow
     * @return \Illuminate\Http\Response
     */
    public function edit(Tchfellow $tchfellow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tchfellow  $tchfellow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tchfellow $tchfellow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tchfellow  $tchfellow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tchfellow = Tchfellow::find($id);
        $tchfellow->delete();
        return 'success';
    }
}