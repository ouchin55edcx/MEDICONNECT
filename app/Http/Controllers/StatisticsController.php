<?php

// app/Http/Controllers/StatisticsController.php

namespace App\Http\Controllers;

use App\Models\Statistics;

class StatisticsController extends Controller
{
    public function specialtyStatistics()
    {
        $specialtyCount = Statistics::getSpecialtyCount();
        


        return view('admin.dashboard', compact('specialtyCount'));
    }

    public function userStatistics()
    {
        $userCount = Statistics::getUserCount();

        return view('admin.dashboard', compact('userCount'));
    }

    // public function medicationStatistics()
    // {
    //     $medicationCount = Statistics::getMedicationCount();
    //     // Add more statistics as needed

    //     return view('statistics.medication', compact('medicationCount'));
    // }
}
