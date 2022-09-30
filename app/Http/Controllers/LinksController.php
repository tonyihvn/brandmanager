<?php

namespace App\Http\Controllers;

use App\Models\links;
use App\Http\Requests\StorelinksRequest;
use App\Http\Requests\UpdatelinksRequest;

class LinksController extends Controller
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
     * @param  \App\Http\Requests\StorelinksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelinksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\links  $links
     * @return \Illuminate\Http\Response
     */
    public function show(links $links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\links  $links
     * @return \Illuminate\Http\Response
     */
    public function edit(links $links)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelinksRequest  $request
     * @param  \App\Models\links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelinksRequest $request, links $links)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(links $links)
    {
        //
    }
}
