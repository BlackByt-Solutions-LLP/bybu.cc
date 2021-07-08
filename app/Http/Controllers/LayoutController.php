<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $layout = new Layout;
        $layout->primaryColor = $request['primaryColor'];
        $layout->secondaryColor = $request['secondaryColor'];
        $layout->bgImage = $request['bgImage'];
        $layout->bgColor = $request['bgColor'];
        $layout->profileImageDiv = $request['profileImageDiv'];
        $layout->profileImage = $request['profileImage'];
        $layout->userDetailsDiv = $request['userDetailsDiv'];
        $layout->userNameDiv = $request['userNameDiv'];
        $layout->userName = $request['userName'];
        $layout->userAbout = $request['userAbout'];
        $layout->linksContainer = $request['linksContainer'];
        $layout->linksDiv = $request['linksDiv'];
        $layout->linkIcon = $request['linkIcon'];
        $layout->linkText = $request['linkText'];

        $layout->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function show(Layout $layout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layout $layout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        //
    }
}
