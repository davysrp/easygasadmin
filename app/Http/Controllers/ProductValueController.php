<?php

namespace App\Http\Controllers;

use App\Models\ProductValue;
use App\Http\Requests\StoreProductValueRequest;
use App\Http\Requests\UpdateProductValueRequest;

class ProductValueController extends Controller
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
     * @param  \App\Http\Requests\StoreProductValueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductValueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductValue  $productValue
     * @return \Illuminate\Http\Response
     */
    public function show(ProductValue $productValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductValue  $productValue
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductValue $productValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductValueRequest  $request
     * @param  \App\Models\ProductValue  $productValue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductValueRequest $request, ProductValue $productValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductValue  $productValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductValue $productValue)
    {
        //
    }
}
