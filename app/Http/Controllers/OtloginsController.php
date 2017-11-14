<?php

namespace App\Http\Controllers;

use App\Otlogins;
use Illuminate\Http\Request;

class OtloginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otlogins = otlogins::orderBy('id', 'asc')->get();
        error_log($otlogins);
        return $otlogins;
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
     * @param  \App\OT_login  $oT_login
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $otlogins = otlogins::find($id);
        return $otlogins;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Otlogins  $otlogins
     * @return \Illuminate\Http\Response
     */
    public function edit(Otlogins $otlogins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Otlogins  $otlogins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otlogins $otlogins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Otlogins  $otlogins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otlogins $otlogins)
    {
        //
    }
}
