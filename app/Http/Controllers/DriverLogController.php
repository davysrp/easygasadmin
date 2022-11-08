<?php

namespace App\Http\Controllers;

use App\Models\DriverLog;
use App\Http\Requests\StoreDriverLogRequest;
use App\Http\Requests\UpdateDriverLogRequest;

class DriverLogController extends Controller
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
     * @param  \App\Http\Requests\StoreDriverLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDriverLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DriverLog  $driverLog
     * @return \Illuminate\Http\Response
     */
    public function show(DriverLog $driverLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DriverLog  $driverLog
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverLog $driverLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDriverLogRequest  $request
     * @param  \App\Models\DriverLog  $driverLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDriverLogRequest $request, DriverLog $driverLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DriverLog  $driverLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverLog $driverLog)
    {
        //
    }
}
