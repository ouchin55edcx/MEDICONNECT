<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\MedicamentController;

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

Route::get('/dashboard', [SpecialtyController::class, 'index'])->name('dashboard');
Route::post('/add-specialty', [SpecialtyController::class, 'create'])->name('addSpecialty');
Route::delete('/specialties/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialties.destroy');
Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('specialties.edit');
Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])->name('specialties.update');

// Route::get('/dashboard', [MedicamentController::class, 'index'])->name('dashboard');

Route::post('/add-Medicament', [MedicamentController::class, 'create'])->name('addMedicament');
Route::delete('/Medicaments/{medicament}', [MedicamentController::class, 'destroy'])->name('medicaments.destroy');
Route::get('/medicaments/{medicament}/edit', [MedicamentController::class, 'edit'])->name('medicaments.edit');
Route::put('/medicaments/{medicament}', [MedicamentController::class, 'update'])->name('medicaments.update');
