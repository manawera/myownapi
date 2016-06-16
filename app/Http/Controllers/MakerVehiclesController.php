<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maker;
use App\Vehicle;

class MakerVehiclesController extends Controller
{
    public function index($id)
    {
    	$maker = Maker::find($id);

    	if (!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $maker->vehicles], 200);
    }

    public function store()
    {
    	
    }

    public function show($id, $vehicleId)
    {
    	$maker = Maker::find($id);

    	if (!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

		$vehicle = $maker->vehicles->find($vehicleId);
    	
    	if (!$vehicle)
    	{
    		return response()->json(['message' => 'This vehicle does not exist for this maker', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $vehicle], 200);
    }

    public function update()
    {
    	
    }

    public function destroy()
    {
    	
    }
}
