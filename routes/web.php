<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
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
    return view('/landingpages/landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('members', MemberController::class);
Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index'); // List members
    Route::get('/create', [MemberController::class, 'create'])->name('members.create'); // Create member form
    Route::post('/', [MemberController::class, 'store'])->name('members.store'); // Store member
    Route::get('/{member}/edit', [MemberController::class, 'edit'])->name('members.edit'); // Edit member form
    Route::put('/{member}', [MemberController::class, 'update'])->name('members.update'); // Update member
    Route::delete('/{member}', [MemberController::class, 'destroy'])->name('members.destroy'); // Delete member
});


Route::get('/about' , [LandingpageController::class, 'about']);
Route::get('/services' , [LandingpageController::class, 'services']);

require __DIR__.'/auth.php';
