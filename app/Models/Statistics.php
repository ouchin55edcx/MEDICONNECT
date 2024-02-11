<?php

// app/Models/Statistics.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Specialty;
use App\Models\User;

class Statistics extends Model
{
    public static function getSpecialtyCount()
    {
        return Specialty::count();
    }

    public static function getUserCount()
    {
        return User::count();
    }


    // Add more methods for other statistics as needed
}
