<?php

namespace App\Http\Controllers;

use App\Models\Caregory;
use App\Http\Requests\StoreCaregoryRequest;
use App\Http\Requests\UpdateCaregoryRequest;

class CaregoryController extends Controller
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
     * @param  \App\Http\Requests\StoreCaregoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaregoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function show(Caregory $caregory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function edit(Caregory $caregory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaregoryRequest  $request
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaregoryRequest $request, Caregory $caregory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregory $caregory)
    {
        //
    }
}
