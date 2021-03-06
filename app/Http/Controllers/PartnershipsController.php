<?php

namespace App\Http\Controllers;

use App\Partnerships;
use Illuminate\Http\Request;

class PartnershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerships = Partnerships::orderBy('id')->get();
        error_log($partnerships);
        return $partnerships;
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
        
        $partnerships = new Partnerships;
        $partnerships->title = request('title');
        $partnerships->description = request('description');
        $partnerships->org = request('org');

        error_log($partnerships);
        $partnerships->save();
        return redirect('/partnerships');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partnerships  $partnerships
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partnerships = Partnerships::find($id);
        return $partnerships;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partnerships  $partnerships
     * @return \Illuminate\Http\Response
     */
    public function edit(Partnerships $partnerships)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partnerships  $partnerships
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partnerships $partnerships)
    {
        $partnerships = Partnerships::find($id);
        $partnerships = new Partnerships;
        $partnerships->title = request('title');
        $partnerships->description = request('description');
        $partnerships->org = request('org');
        $partnerships->save();
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partnerships  $partnerships
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnerships = Partnerships::find($id);
        $partnerships->delete();
        return 'success';
    }
}
