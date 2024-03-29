<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorProfileController;


use App\Models\Medicament;
use App\Models\Specialty;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// specialty route doctor route 
Route::get('/dashboard', [SpecialtyController::class, 'index'])->name('dashboard');
Route::post('/add-specialty', [SpecialtyController::class, 'create'])->name('addSpecialty');
Route::delete('/specialties/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialties.destroy');
Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('specialties.edit');
Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])->name('specialties.update');



// medicament route 
// Route::get('/dashboard', [MedicamentController::class, 'index'])->name('dashboard');
Route::post('/add-Medicament', [MedicamentController::class, 'create'])->name('addMedicament');
Route::delete('/Medicaments/{medicament}', [MedicamentController::class, 'destroy'])->name('medicaments.destroy');
Route::get('/medicaments/{medicament}/edit', [MedicamentController::class, 'edit'])->name('medicaments.edit');
Route::put('/medicaments/{medicament}', [MedicamentController::class, 'update'])->name('medicaments.update');


// doctor route 
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor.doctors');
Route::post('/add-medication', [DoctorController::class, 'create'])->name('addMedication');


// Patient route 
Route::get('/patient', [PatientController::class, 'index'])->name('patient.patient');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('patient.appointment');
Route::get('/doctor_profile', [DoctorProfileController::class, 'index'])->name('patient.doctor_profile');
