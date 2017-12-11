<?php

namespace App\Http\Controllers;

use App\Eventfeeds;
use Illuminate\Http\Request;

class EventfeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventfeeds = Eventfeeds::orderBy('id')->get();
        error_log($eventfeeds);
        return $eventfeeds;
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
        
        $eventfeeds = new Eventfeeds;
        $eventfeeds->title = request('title');
        $eventfeeds->content = request('description');
        $eventfeeds->date = request('date'); 
        $eventfeeds->location = request('location');
        $eventfeeds->start_time = request('start_time');
        $eventfeeds->end_time = request('end_time');
        error_log($eventfeeds);
        $eventfeeds->save();
        return redirect('/eventfeeds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventFeed  $eventFeed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventfeeds = Eventfeeds::find($id);
        return $eventfeeds;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventfeeds  $eventfeeds
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventfeeds $eventfeeds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventfeeds  $eventfeeds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventfeeds $eventfeeds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventfeeds  $eventfeeds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventfeeds $eventfeeds)
    {
        //
    }
}
