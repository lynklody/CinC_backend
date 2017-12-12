<?php

namespace App\Http\Controllers;

use App\Faclexperiences;
use Illuminate\Http\Request;

class FaclexperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $faclexperiences = Faclexperiences::orderBy('id')->get();
        error_log($faclexperiences);
        return $faclexperiences;
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
        
        $faclexperiences = new Faclexperiences;
        $faclexperiences->title = request('title');
        $faclexperiences->description = request('description');
        $faclexperiences->fac_name = request('fac_name');

        error_log($faclexperiences);
        $faclexperiences->save();
        return redirect('/faclexperiences');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faclexperiences = Faclexperiences::find($id);
        return $faclexperiences;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function edit(Faclexperiences $faclexperiences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faclexperiences $faclexperiences)
    {
        
        $faclexperiences = Faclexperiences::find($id);
        $faclexperiences->title = request('title');
        $faclexperiences->description = request('description');
        $faclexperiences->fac_name = request('fac_name');

        $faclexperiences->save();
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faclexperiences  $faclexperiences
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faclexperiences = Faclexperiences::find($id);
        $faclexperiences->delete();
        return 'success';
    }
}
