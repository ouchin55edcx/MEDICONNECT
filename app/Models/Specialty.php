<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;
    protected $table = 'specialty'; // Ensure the table name matches your database table name
    protected $fillable = ['specialtyName']; // Allow mass assignment for the 'specialtyName' field
}
