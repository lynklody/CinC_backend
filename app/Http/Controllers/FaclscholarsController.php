<?php

namespace App\Http\Controllers;

use App\Faclscholars;
use Illuminate\Http\Request;

class FaclscholarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $faclscholars = Faclscholars::orderBy('id')->get();
        error_log($faclscholars);
        return $faclscholars;
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
        
        $faclscholars = new Faclscholars;
        $faclscholars->title = request('title');
        $faclscholars->description = request('description');
        $faclscholars->fac_name = request('fac_name');
        $faclscholars->department = request('department');
        error_log($faclscholars);
        $faclscholars->save();
        return redirect('/faclscholars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faclscholars  $faclscholars
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faclscholars = Faclscholars::find($id);
        return $faclscholars;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faclscholars  $faclscholars
     * @return \Illuminate\Http\Response
     */
    public function edit(Faclscholars $faclscholars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faclscholars  $faclscholars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faclscholars $faclscholars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faclscholars  $faclscholars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faclscholars $faclscholars)
    {
        //
    }
}
