<?php


use App\Http\Controllers\NotificationController;
use App\Http\Controllers\adminContoller;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanContoller;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TraineeController;



Route::get('/', function () {
    return view('auth.login');
});
//-----------------dashboard route------------------------------//
Route::get('/dashboard', [adminContoller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//---------------------user profile routes---------------------//
Route::middleware('auth')->group(function () {
    Route::get('user/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');
});

//-------------------------admin routes----------------------//


//-------------------pricing  plan routes-------------------//
Route::resource('pricing/plans', PlanController::class)->middleware(['auth']);
Route::post('pricing/plans', [PlanController::class, 'store'])->name('pricing.plans.store');
Route::put('pricing/plans', [PlanController::class, 'update'])->name('pricing.plans.update');

// ---------------- trainee routes--------------------//
Route::get('/trainee/dashboard', [ProfileController::class, 'view'])->name('trainee.home');
Route::get('/trainee/calendar/schedule',[TraineeController::class, 'schedule'])->name('schedule_calendar');

//----------------trainer routes-----------------------//
Route::get('/trainer/dashboard', [TrainerController::class, 'index'])->name('trainer.home');
Route::get('/trainer/activation/request', [TrainerController::class,'activation_request'])->middleware(['auth', 'verified'])->name('trainer.request');
Route::post('/trainer/activation', [NotificationController::class,'store'])->name('activation');
//Route::post('/trainer/calendar/',[ScheduleController::class,'store'])->middleware(['auth', 'verified'])->name('schedule_calendar');

// ------------------notification route----------//
// Route::post('/trainer/dashboard', [TrainerController::class,'store'])->name('');

// ----------------pricing plans-----------//
Route::post('pricing/plans', [PlanController::class, 'store'])->middleware(['auth', 'verified'])->name('pricing.plans.store');
Route::put('pricing/plans', [PlanController::class, 'update'])->middleware(['auth', 'verified'])->name('pricing.plans.update');

//-------------------trainee routes ----------------------//
// Route::get('/trainee/dashboard', [TraineeController::class, 'index'])->middleware(['auth', 'verified'])->name('trainee.home');
// Route::get('/trainee/calendar/schedule',[TraineeController::class, 'schedule'])->middleware(['auth', 'verified'])->name('schedule_calendar');


//----------------trainer routes-----------------------//
// Route::get('/trainer/dashboard', [TrainerController::class, 'index'])->middleware(['auth', 'verified'])->name('trainer.home');
// Route::get('/trainer/activation/requests', [TrainerController::class, 'activation_request'])->middleware(['auth', 'verified'])->name('trainer.request');








require __DIR__ . '/auth.php';
