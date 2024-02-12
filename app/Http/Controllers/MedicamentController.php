<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class MedicamentController extends Controller
{
    public function index()
    {
    }

    public function create(Request $request)
    {
        $request->validate([
            'newMedicament' => 'required|string|max:255',
            'specialty' => 'required|exists:Specialty,id', 
        ]);
    
        $newMedicamentName = $request->input('newMedicament');
        $specialtyId = $request->input('specialty');
    
        // Ensure the column names match your model
        Medicament::create([
            'medicamentName' => $newMedicamentName,
            'specialty_id' => $specialtyId,
        ]);
    
        return redirect()->route('dashboard');
    }
    
    

    public function edit(Medicament $Medicament)
    {
        return view('Medicaments.edit', compact('Medicament'));
    }

    public function update(Request $request, Medicament $Medicament)
    {
        $request->validate([
            'medicamentName' => 'required|string|max:255',
            // Add any other validation rules as needed
        ]);
        

        $Medicament->update([
            'medicamentName' => $request->input('medicamentName'),
            // Update any other fields as needed
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy(Medicament $medicament)
    {
        // Delete the medicament
        $medicament->delete();
    
        // Redirect back or return a response as needed
        return redirect()->route('dashboard');
    }
    
    

}
