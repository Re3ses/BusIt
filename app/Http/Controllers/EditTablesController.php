<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_Trips;

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
        // store in public folder
        $busid = $request['busid_input'];

        $product = Bus_Trips::create([
            'departure_time' => $request['departure_input'],
            'arrival' => $request['arrival_input'],
            'user_id' => Auth::id(),
            //'bus_id' =>,
            //'route_id' =>
        ]);
        return redirect('shop');
    }



}