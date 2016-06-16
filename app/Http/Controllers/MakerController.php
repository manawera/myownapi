<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maker; // use maker model

use App\Http\Requests\CreateMakerRequest;

class MakerController extends Controller
{
    public function index()
    {
    	$makers = Maker::all();

    	return response()->json(['data' => $makers], 200);
    }

    public function store(CreateMakerRequest $request)
    {
    	$values = $request->only(['name', 'phone']);

    	Maker::create($values);

        return response()->json(['message' => 'Maker correctly added'], 201);
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

    public function update(CreateMakerRequest $request, $id)
    {
    	$maker = Maker::find($id);

        if (!$maker)
        {
            return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
        }

        $name = $request->get('name');
        $phone = $request->get('phone');

        $maker->name = $name;
        $maker->phone = $phone;

        $maker->save();

        return response()->json(['message' => 'The maker has been updated'], 200);
    }

    public function destroy()
    {
    	
    }
}
