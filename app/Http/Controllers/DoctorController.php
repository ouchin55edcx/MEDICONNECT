<?php

// app/Http/Controllers/DoctorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {

        return view('doctor.doctors');
    }

    // You can add more methods for other actions related to doctors
}
