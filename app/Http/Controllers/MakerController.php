<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maker; // use maker model

class MakerController extends Controller
{
    public function index()
    {
    	$makers = Maker::all();

    	return response()->json(['data' => $makers], 200);
    }

    public function store()
    {
    	
    }

    public function show($id)
    {
    	$maker = Maker::find($id);

    	if (!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $maker], 200);
    	
    }

    public function update()
    {
    	
    }

    public function destroy()
    {
    	
    }
}
