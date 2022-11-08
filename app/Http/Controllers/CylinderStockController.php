<?php

namespace App\Http\Controllers;

use App\Models\CylinderStock;
use App\Http\Requests\StoreCylinderStockRequest;
use App\Http\Requests\UpdateCylinderStockRequest;

class CylinderStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.cyclinderstock.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cyclinderstock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCylinderStockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCylinderStockRequest $request)
    {
        return redirect()->back()->with('success', 'Recode save successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CylinderStock  $cylinderStock
     * @return \Illuminate\Http\Response
     */
    public function show(CylinderStock $cylinderStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CylinderStock  $cylinderStock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.cyclinderstock.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCylinderStockRequest  $request
     * @param  \App\Models\CylinderStock  $cylinderStock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCylinderStockRequest $request, CylinderStock $cylinderStock)
    {
        return redirect()->back()->with('success', 'Recode save successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CylinderStock  $cylinderStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(CylinderStock $cylinderStock)
    {
        //
    }
}
