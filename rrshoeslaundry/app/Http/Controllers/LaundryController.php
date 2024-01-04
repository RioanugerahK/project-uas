<?php

namespace App\Http\Controllers;
use App\Models\laundries;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laundries = laundries::all();
        $laundries = laundries::orderBy('created_at', 'DESC')->get();

        return view('index', compact('laundries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       laundries::create($request->all());

       return redirect()->route('index')->with('success', 'Shoes added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laundries = laundries::findOrFail($id);

        return view('show', compact('laundries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laundries = laundries::findOrFail($id);

        return view('edit', compact('laundries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laundries = laundries::findOrFail($id);

        $laundries->update($request->all());

        return redirect()->route('index')->with('success', 'Shoes updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laundries = laundries::findOrFail($id);

        $laundries->delete();

        return redirect()->route('index')->with('success', 'Shoes deleted successfully');
    }
}
