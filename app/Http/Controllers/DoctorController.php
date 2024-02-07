<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function DoctorDashboard()
    {
       return view('doctor.doctor_dashboard');
    }
}
