<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return Booking::with(['user', 'property'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'property_id' => 'required|exists:properties,id',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
            'status' => 'sometimes|string',
        ]);

        return Booking::create($data);
    }

    public function show(Booking $booking)
    {
        return $booking->load(['user', 'property']);
    }

    public function update(Request $request, Booking $booking)
    {
        $data = $request->validate([
            'check_in' => 'sometimes|date',
            'check_out' => 'sometimes|date|after:check_in',
            'guests' => 'sometimes|integer|min:1',
            'total_price' => 'sometimes|numeric',
            'status' => 'sometimes|string',
        ]);

        $booking->update($data);

        return $booking;
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return response()->json(['message' => 'Booking deleted']);
    }
}