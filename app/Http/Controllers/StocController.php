<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Http\Requests\StoreStocRequest;
use App\Http\Requests\UpdateStocRequest;

class StocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStocRequest $request, Stock $stoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stoc)
    {
        //
    }
}
