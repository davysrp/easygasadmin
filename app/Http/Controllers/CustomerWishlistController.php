<?php

namespace App\Http\Controllers;

use App\Models\CustomerWishlist;
use App\Http\Requests\StoreCustomerWishlistRequest;
use App\Http\Requests\UpdateCustomerWishlistRequest;

class CustomerWishlistController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerWishlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerWishlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerWishlist  $customerWishlist
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerWishlist $customerWishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerWishlist  $customerWishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerWishlist $customerWishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerWishlistRequest  $request
     * @param  \App\Models\CustomerWishlist  $customerWishlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerWishlistRequest $request, CustomerWishlist $customerWishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerWishlist  $customerWishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerWishlist $customerWishlist)
    {
        //
    }
}
