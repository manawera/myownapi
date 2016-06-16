<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle; // use Vehicle model

class VehicleController extends Controller
{
    public function index()
    {
    	$vehicles = Vehicle::all();

    	return response()->json(['data' => $vehicles], 200);
    }
}
