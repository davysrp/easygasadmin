<?php

namespace App\Http\Controllers;

use App\Models\CategoryValue;
use App\Http\Requests\StoreCategoryValueRequest;
use App\Http\Requests\UpdateCategoryValueRequest;

class CategoryValueController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryValueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryValueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryValue  $categoryValue
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryValue $categoryValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryValue  $categoryValue
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryValue $categoryValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryValueRequest  $request
     * @param  \App\Models\CategoryValue  $categoryValue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryValueRequest $request, CategoryValue $categoryValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryValue  $categoryValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryValue $categoryValue)
    {
        //
    }
}
