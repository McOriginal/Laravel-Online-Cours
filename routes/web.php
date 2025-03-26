<?php

use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





// -------------------------------------------------
// ----------------- Student Route--------------------------------

Route::group(['middleware' => ['auth:web', 'verified', 'check_role:student'], 'prefix' => 'student', 'as' => 'student.'],function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});

// -------------------------------------------------
// ----------------- Student Route--------------------------------






// -------------------------------------------------
// ----------------- Instructor Route--------------------------------
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor.'],function () {
    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});
// -------------------------------------------------
// ----------------- Instructor Route--------------------------------





// -------------------------------------------------
// ----------------- Admin Route--------------------------------

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
// -------------------------------------------------
// ----------------- Admin Route--------------------------------



require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
