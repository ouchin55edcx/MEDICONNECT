<?php

// app/Http/Controllers/DoctorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class DoctorController extends Controller
{
    public function index()
    {
        $medicaments = Medicament::all();


        return view('doctor.doctors', compact('medicaments'));
    }

    // Make sure to include your Medicament model at the top

    public function create(Request $request)
    {
        $request->validate([
            'newMedicament' => 'required|string|max:255',
        ]);

        $newMedicamentName = $request->input('newMedicament');

        // Ensure the column name matches your model
        Medicament::create(['medicamentName' => $newMedicamentName]);

        return redirect()->back();
    }
}
