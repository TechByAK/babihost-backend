<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return Property::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'price_per_night' => 'required|numeric',
            'max_guests' => 'required|integer',
        ]);

        return Property::create($data);
    }

    public function show(Property $property)
    {
        return $property;
    }

    public function update(Request $request, Property $property)
    {
        $data = $request->validate([
            'title' => 'sometimes|string',
            'description' => 'nullable|string',
            'location' => 'sometimes|string',
            'price_per_night' => 'sometimes|numeric',
            'max_guests' => 'sometimes|integer',
        ]);

        $property->update($data);

        return $property;
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return response()->json(['message' => 'Property deleted']);
    }
}