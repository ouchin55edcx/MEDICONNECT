<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\Medicament;
use Illuminate\Http\Request;
use App\Models\User;

class SpecialtyController extends Controller
{
public function index()
{
    $specialties = Specialty::all();
    $medicaments = Medicament::all();
    $totalSpecialties = Specialty::count();

    // Fetch user statistics
    $totalUsers = User::count();
    $totalMedicament = Medicament::count();

    return view('admin.dashboard', compact('specialties', 'totalSpecialties', 'totalUsers', 'totalMedicament','medicaments'));
}

    
    

    public function create(Request $request)
    {
        $newSpecialtyName = $request->input('newSpecialty');

        // Add the new specialty to the database using the create method
        Specialty::create(['specialtyName' => $newSpecialtyName]);

        // Redirect back or return a response as needed
        return redirect()->route('dashboard');
    }

    public function edit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }

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

        return redirect()->route('dashboard');
    }

    public function destroy(Specialty $specialty)
    {
        // Delete the specialty
        $specialty->delete();

        // Redirect back or return a response as needed
        return redirect()->route('dashboard');
    }
}
