<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bus_Trips;
use Auth;

class editTablesController extends Controller
{
    public function index()
    {
        $tripsData = Bus_Trips::with(['bus_data', 'bus_routes'])->get();

        return view('pages.edit-tables', compact('tripsData'));
    }
//hello from noel

    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'busNo' => 'required|exists:bus__data,bus_number'
            // Add other validation rules as needed
        ]);

        // Get the bus ID based on the bus number
        $busId = DB::table('bus__data')
            ->where('bus_number', $request['busNo'])
            ->pluck('id')
            ->first();

        $busDriver = DB::table('bus__routes')
            ->where('route_destination', $request['destination'])
            ->pluck('id')
            ->first();

        // // Create a new bus trip in the database
        // $busTrip = new Bus_Trips;
        // $busTrip->bus_id = $busId;
        // $busTrip->departure_time = $request->departure;
        // $busTrip->route_id = $destination;
        // $busTrip->user_id = Auth::id();
        // // Set other properties of the bus trip as needed
        // $busTrip->save();

        // // Redirect the user to a new page
        // return redirect('/bus_trips');
        
        $product = Bus_Trips::create([
            'departure_time' => $request['departure'],
            'user_id' => Auth::id(),
            'bus_id' => $busId,
            'route_id' => $busDriver
        ]);
        return redirect('/bus_trips');
    }



}