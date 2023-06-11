<?php

namespace App\Http\Controllers;

use App\Models\CustomerDemographics;
use Illuminate\Http\Request;

class CustomerDemographicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): array
    {
        return [
            'data' => CustomerDemographics::all(),
        ];
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerDemographics $customerDemographics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerDemographics $customerDemographics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerDemographics $customerDemographics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerDemographics $customerDemographics)
    {
        //
    }
}
