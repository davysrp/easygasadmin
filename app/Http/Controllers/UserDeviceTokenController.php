<?php

namespace App\Http\Controllers;

use App\Models\UserDeviceToken;
use App\Http\Requests\StoreUserDeviceTokenRequest;
use App\Http\Requests\UpdateUserDeviceTokenRequest;

class UserDeviceTokenController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDeviceTokenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDeviceTokenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDeviceToken  $userDeviceToken
     * @return \Illuminate\Http\Response
     */
    public function show(UserDeviceToken $userDeviceToken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDeviceToken  $userDeviceToken
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDeviceToken $userDeviceToken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDeviceTokenRequest  $request
     * @param  \App\Models\UserDeviceToken  $userDeviceToken
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDeviceTokenRequest $request, UserDeviceToken $userDeviceToken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDeviceToken  $userDeviceToken
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDeviceToken $userDeviceToken)
    {
        //
    }
}
