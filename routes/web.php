<?php

use App\Http\Controllers\adminContoller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanContoller;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainerController;

Route::get('/', function () {
    return view('auth.login');
});
//-----------------dashboard route------------------------------//
Route::get('/dashboard', [adminContoller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//---------------------user profile routes---------------------//
Route::middleware('auth')->group(function () {
    Route::get('user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//-------------------pricing  plan routes-------------------//
Route::resource('pricing/plans', PlanController::class)->middleware(['auth']);
Route::post('pricing/plans', [PlanController::class, 'store'])->name('pricing.plans.store');
Route::put('pricing/plans', [PlanController::class, 'update'])->name('pricing.plans.update');

//-------------------trainee routes ----------------------//
Route::get('/trainee/dashboard', [ProfileController::class, 'view'])->name('trainee.home');
Route::get('/trainee/calendar/schedule', [TraineeController::class, 'schedule'])->name('schedule_calendar');


//----------------trainer routes-----------------------//
Route::get('/trainee/dashboard', [TrainerController::class, 'index'])->name('trainer.home');






require __DIR__ . '/auth.php';
