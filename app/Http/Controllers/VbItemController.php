<?php

namespace App\Http\Controllers;

use App\vbItem;
use Illuminate\Http\Request;
use App\Models\VbItemStatus;
use App\Models\SubType;

class VbItemController extends Controller
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
        $subtypes = SubType::all();

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
     * @param  \App\vbItem  $vbItem
     * @return \Illuminate\Http\Response
     */
    public function show(vbItem $vbItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vbItem  $vbItem
     * @return \Illuminate\Http\Response
     */
    public function edit(vbItem $vbItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vbItem  $vbItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vbItem $vbItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vbItem  $vbItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(vbItem $vbItem)
    {
        //
    }
}
