<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch specialties from the database
        $specialties = Specialty::all();

        // Pass the specialties to the view
        return view('admin.dashboard', ['specialties' => $specialties]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $newSpecialtyName = $request->input('newSpecialty');

        // Add the new specialty to the database using the create method
        Specialty::create(['specialtyName' => $newSpecialtyName]);

        // Redirect back or return a response as needed
        return redirect()->route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialty $specialty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialty $specialty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialty $specialty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        //
    }
}
