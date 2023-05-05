<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_Trips;

class editTablesController extends Controller
{
    public function index()
    {
        $tripsData = Bus_Trips::with(['bus_data', 'bus_drivers', 'bus_routes'])->get();

        return view('pages.edit-tables', compact('tripsData'));
    }

}