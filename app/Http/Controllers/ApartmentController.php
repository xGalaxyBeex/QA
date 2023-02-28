<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Apartments = Apartment::orderBy('id', 'desc')->paginate(10);
        return view('apartments.index', compact('Apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price_per_sqm' => 'required|numeric',
            'year_built' => 'required',
            'floors_count' => 'required|numeric',
        ]);

        Apartment::create($request->all());

        return redirect()->route('apartments.index')->with('success', 'Apartment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $Apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $Apartment)
    {
        $Apartment = Apartment::findOrFail($Apartment->id);

        return view('apartments.show', compact('Apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $Apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $Apartment)
    {
        $Apartment = Apartment::findOrFail($Apartment->id);
        return view('apartments.edit', compact('Apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $Apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $Apartment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'square_meters' => 'required|numeric',
            'rooms' => 'required',
            'floor' => 'required|numeric',

        ]);

        $Apartment = Apartment::findOrFail($Apartment->id);
        $Apartment->update($request->all());

        return redirect()->route('Apartments.index')->with('success', 'Apartment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $Apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $Apartment)
    {
        $Apartment = Apartment::findOrFail($Apartment->id);
        $Apartment->delete();

        return redirect()->route('apartments.index')->with('success', 'Apartment deleted successfully.');
    }
}
