<?php

namespace App\Http\Controllers;

use App\Models\OrderReview;
use App\Http\Requests\StoreOrderReviewRequest;
use App\Http\Requests\UpdateOrderReviewRequest;

class OrderReviewController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderReview  $orderReview
     * @return \Illuminate\Http\Response
     */
    public function show(OrderReview $orderReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderReview  $orderReview
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderReview $orderReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderReviewRequest  $request
     * @param  \App\Models\OrderReview  $orderReview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderReviewRequest $request, OrderReview $orderReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderReview  $orderReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderReview $orderReview)
    {
        //
    }
}
