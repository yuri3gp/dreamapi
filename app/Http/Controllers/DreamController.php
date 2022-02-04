<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use Illuminate\Http\Request;

class DreamController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Dream $dream)
    {
        $id = Dream::create([
            "title" => $dream->title,
            "dream" => $dream->dream
        ])->id;

        return $id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function show(Dream $dream)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dream $dream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dream  $dream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dream $dream)
    {
        //
    }
}
