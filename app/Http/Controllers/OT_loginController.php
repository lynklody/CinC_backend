<?php

namespace App\Http\Controllers;

use App\OT_login;
use Illuminate\Http\Request;

class OT_loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ot_logins = OT_login::orderBy('id', 'asc')->get();
        error_log($ot_logins);
        return $ot_logins;
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
        $ot_login = OT_login::find($id);
        return $ot_login;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OT_login  $oT_login
     * @return \Illuminate\Http\Response
     */
    public function edit(OT_login $oT_login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OT_login  $oT_login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OT_login $oT_login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OT_login  $oT_login
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ot_login = OT_login::find($id);
        $ot_login->delete();
        return 'success';
    }
}
