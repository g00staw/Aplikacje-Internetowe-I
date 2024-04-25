<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $trips->random(4),
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            'trip' => Trip::findOrFail($id)
        ]);
    }

    public function edit(Trip $trip)
    {
        $countries = Country::all(); // Get all countries for the dropdown
        return view('trips.edit', compact('trip', 'countries'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:trips,name,'.$id,
            'continent' => 'required|string',
            'period' => 'required|integer|min:1',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image_name' => 'required|string',
            'country_id' => 'required|exists:countries,id',
        ]);
    
        // Pobranie istniejącego obiektu wycieczki z bazy danych
        $trip = Trip::findOrFail($id);
    
        // Zaktualizowanie atrybutów wycieczki na podstawie danych z zapytania
        $trip->update($request->all());
    
        // Przekierowanie użytkownika do listy wycieczek po zaktualizowaniu
        return redirect()->route('trips.index');
    }

    public function showTrips()
    {
        $randomTrips = Trip::inRandomOrder()->take(4)->get();
        return view('trips.index', compact('randomTrips'));
    }
    
}
