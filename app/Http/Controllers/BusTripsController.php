<?php

namespace App\Http\Controllers;

use App\Models\Bus_Trips;
use App\Http\Requests\StoreBus_TripsRequest;
use App\Http\Requests\UpdateBus_TripsRequest;

class BusTripsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getTrips()
    {
        //$data = Bus_Trips::all();
        $tripsData = Bus_Trips::with(['bus_data', 'bus_drivers'])->get();
        // $data = json_decode(Bus_Trips::all());
        // $propertyValue = $data[0]->id;

        return ($tripsData);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreBus_TripsRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Bus_Trips $bus_Trips)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Bus_Trips $bus_Trips)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateBus_TripsRequest $request, Bus_Trips $bus_Trips)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Bus_Trips $bus_Trips)
    // {
    //     //
    // }
}