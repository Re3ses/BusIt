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
//hello from noel
    public function store()
    {
        // store in public folder
        $product = Bus_Trips::create([
            'departure_time' => $request['product_name'],
            'price' => $request['product_price'],
            'user_id' => Auth::id()
        ]);
        return redirect('shop');
    }



}