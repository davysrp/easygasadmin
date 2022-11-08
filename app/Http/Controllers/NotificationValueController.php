<?php

namespace App\Http\Controllers;

use App\Models\NotificationValue;
use App\Http\Requests\StoreNotificationValueRequest;
use App\Http\Requests\UpdateNotificationValueRequest;

class NotificationValueController extends Controller
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
     * @param  \App\Http\Requests\StoreNotificationValueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotificationValueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NotificationValue  $notificationValue
     * @return \Illuminate\Http\Response
     */
    public function show(NotificationValue $notificationValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotificationValue  $notificationValue
     * @return \Illuminate\Http\Response
     */
    public function edit(NotificationValue $notificationValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotificationValueRequest  $request
     * @param  \App\Models\NotificationValue  $notificationValue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationValueRequest $request, NotificationValue $notificationValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotificationValue  $notificationValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotificationValue $notificationValue)
    {
        //
    }
}
