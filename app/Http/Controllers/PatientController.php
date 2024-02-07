<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function PatientHome()
    {
        return view('patient.patient_home');
    }
}
