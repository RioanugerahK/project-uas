<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laundry = Laundry::orderBy('created_at', 'DESC')->get();

        return view('laundry.index', compact('laundry'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.laundry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Laundry::create($request->all());

       return redirect()->route('laundry.index')->with('success', 'Shoes added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laundry = Laundry::findOrFail($id);

        return view('pages.laundry.show', compact('laundry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laundry = Laundry::findOrFail($id);

        return view('pages.laundry.edit', compact('laundry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laundry = Laundry::findOrFail($id);

        $laundry->update($request->all());

        return redirect()->route('laundry.index')->with('success', 'Shoes updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laundry = Laundry::findOrFail($id);

        $laundry->delete();

        return redirect()->route('laundry.index')->with('success', 'Shoes deleted successfully');
    }
}
