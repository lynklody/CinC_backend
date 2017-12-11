<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::orderBy('id')->get();
        error_log($blogs);
        return $blogs;
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
        $blogs = new Blogs;
        $blogs->id;
        $blogs->author = request('author');
        $blogs->title = request('title');
        $blogs->body = request('description');

        error_log($blogs);

        $blogs->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blogs::find($id);
        return $blogs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = Blogs::find($id);
        $blogs->author = request('author');
        $blogs->time = request('date');
        $blogs->title = request('title');
        $blogs->body = request('desc');
        $blogs->body = nl2br($blogs->body);
        $blogs->url = request('url');
        $blogs->save();
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        $blogs->delete();
        return 'success';
    }
}
