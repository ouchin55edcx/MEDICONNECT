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
        $totalSpecialties = Specialty::count();
        
        // Example: Get the count of specialties created in the last 30 days
        $specialtiesCreatedLast30Days = Specialty::where('created_at', '>=', now()->subDays(30))->count();
        // Pass the specialties to the view
        return view('admin.dashboard', ['specialties' => $specialties],compact('totalSpecialties', 'specialtiesCreatedLast30Days'));
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
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialty $specialty)
    {
        $request->validate([
            'specialtyName' => 'required|string|max:255',
            // Add any other validation rules as needed
        ]);

        $specialty->update([
            'specialtyName' => $request->input('specialtyName'),
            // Update any other fields as needed
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        // Delete the specialty
        $specialty->delete();

        // Redirect back or return a response as needed
        return redirect()->route('dashboard');
    }
}
