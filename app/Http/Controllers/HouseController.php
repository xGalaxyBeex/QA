<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::orderBy('id', 'desc')->paginate(10);
        return view('houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('houses.create');
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

        House::create($request->all());

        return redirect()->route('houses.index')->with('success', 'House created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        $house = House::findOrFail($house->id);

        return view('houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        $house = House::findOrFail($house->id);
        return view('houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price_per_sqm' => 'required|numeric',
            'year_built' => 'required',
            'floors_count' => 'required|numeric',

        ]);

        $house = House::findOrFail($house->id);
        $house->update($request->all());

        return redirect()->route('houses.index')->with('success', 'House updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        $house = House::findOrFail($house->id);
        $house->delete();

        return redirect()->route('houses.index')->with('success', 'House deleted successfully.');
    }
}
