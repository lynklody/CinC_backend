<?php

namespace App\Http\Controllers;

use App\Nonotlogins;
use Illuminate\Http\Request;

class NonotloginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonotlogins = Nonotlogins::orderBy('id')->get();
        error_log($nonotlogins);
        return $nonotlogins;
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
     * @param  \App\Nonotlogin  $nonotlogin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nonotlogins = Nonotlogins::find($id);
        return $nonotlogins;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nonotlogins  $nonotlogins
     * @return \Illuminate\Http\Response
     */
    public function edit(Nonotlogins $nonotlogins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nonotlogins  $nonotlogins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nonotlogins $nonotlogins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nonotlogins  $nonotlogins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nonotlogins $nonotlogins)
    {
        //
    }
}
