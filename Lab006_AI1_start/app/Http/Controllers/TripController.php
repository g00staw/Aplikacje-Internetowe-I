<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all(); // Pobranie wszystkich wycieczek
        return view('trips.index', compact('trips')); // Przekazanie do widoku
    }

    public function show($id)
    {
        $trip = Trip::findOrFail($id); // Znajdź wycieczkę lub zwróć 404
        return view('trips.show', compact('trip')); // Przekazanie do widoku
    }

    public function cheapestTrips()
    {
        $trips = Trip::orderBy('price', 'asc')->take(4)->get();
        return view('trips.index', compact('trips'));
    }


}