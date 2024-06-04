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
use App\Http\Controllers\ActivationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TraineeNotificationController;
use App\Http\Controllers\TraineeProgressController;

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

//-------------------pricing  plan routes-------------------//
Route::resource('pricing/plans', PlanController::class)->middleware(['auth']);
Route::post('pricing/plans', [PlanController::class, 'store'])->middleware(['auth', 'verified'])->name('pricing.plans.store');
Route::put('pricing/plans', [PlanController::class, 'update'])->middleware(['auth', 'verified'])->name('pricing.plans.update');
Route::post('pricing/plans', [PlanController::class, 'store'])->middleware(['auth', 'verified'])->name('pricing.plans.store');
Route::put('pricing/plans', [PlanController::class, 'update'])->middleware(['auth', 'verified'])->name('pricing.plans.update');

// Route::post('pricing/plans', [PlanController::class, 'store'])->middleware(['auth', 'verified'])->name('pricing.plans.store');
// Route::put('pricing/plans', [PlanController::class, 'update'])->middleware(['auth', 'verified'])->name('pricing.plans.update');


// ---------------- trainee routes--------------------//
Route::get('/trainee/dashboard', [ProfileController::class, 'view'])->name('trainee.home');
Route::get('/trainee/dashboard', [TraineeController::class, 'index'])->middleware(['auth', 'verified'])->name('trainee.home');
Route::get('/trainee/calendar/schedule', [TraineeController::class, 'schedule'])->middleware(['auth', 'verified'])->name('trainee.schedule');
Route::get('/trainee/calendar/schedule', [TraineeController::class, 'trainingschedule'])->name('trainee.schedule');
Route::get('/trainee/mealplanning/meal', [MealPlanController::class, 'meal_index'])->middleware(['auth', 'verified'])->name('trainee.meal');
Route::get('/trainee/mealplanning/supplimets', [MealPlanController::class, 'suppliment_index'])->middleware(['auth', 'verified'])->name('trainee.suppliment');
Route::get('/trainee/progress/progress', [TraineeProgressController::class, 'progress_index'])->middleware(['auth', 'verified'])->name('trainee.progress');
Route::get('/trainee/progress/attendance', [TraineeProgressController::class, 'attendance_index'])->middleware(['auth', 'verified'])->name('trainee.attendance');
Route::get('/trainee/progress/notes', [TraineeProgressController::class, 'notes_index'])->middleware(['auth', 'verified'])->name('trainee.notes');
Route::get('/trainee/notifications/messeges', [TraineeNotificationController::class, 'messeges_index'])->middleware(['auth', 'verified'])->name('trainee.messeges');
Route::get('/trainee/notifications/nutrition&health', [TraineeNotificationController::class, 'nutrition_index'])->middleware(['auth', 'verified'])->name('trainee.nutrition');
Route::get('/trainee/dashboard', [TraineeController::class, 'index'])->middleware(['auth', 'verified'])->name('trainee.home');
Route::get('/trainee/calendar/schedule', [TraineeController::class, 'schedule'])->middleware(['auth', 'verified'])->name('trainee.schedule');



//----------------trainer routes starts  here-----------------------//
Route::get('/trainer/dashboard', [TrainerController::class, 'index'])->middleware(['auth', 'verified'])->name('trainer.home');
Route::get('admin/trainer/activation/requests', [TrainerController::class, 'activation_request'])->middleware(['auth', 'verified'])->name('trainer.request');
Route::get('/trainer/level', [TrainerController::class, 'createLevel'])->middleware(['auth', 'verified'])->name('trainer.levels');
Route::post('/trainer/level/store', [TrainerController::class, 'levelStore'])->middleware(['auth', 'verified'])->name('trainer.levels.store');

Route::get('/trainee/calendar/schedule', [TraineeController::class, 'schedule'])->middleware(['auth', 'verified'])->name('trainer.schedule_calendar');

Route::get('/trainer/dashboard', [TrainerController::class, 'index'])->name('trainer.home');
Route::get('/trainer/activation/request', [TrainerController::class, 'activation_request'])->middleware(['auth', 'verified'])->name('trainer.request');
Route::post('/trainer/activation', [NotificationController::class, 'store'])->name('activation');
Route::post('/trainer/schedule/store', [ScheduleController::class, 'store'])->middleware(['auth', 'verified'])->name('trainer.schedule.store');
//-----------trainer meal plan routes--------------//
Route::get('/trainer/mealplanning/meals', [MealPlanController::class, 'meal_index'])->middleware(['auth', 'verified'])->name('trainer.meals');
Route::post('/trainer/mealplanning/store', [MealPlanController::class, 'meal_store'])->middleware(['auth', 'verified'])->name('trainer.meals.store');
Route::get('/trainer/meal/planning', [TrainerController::class, 'mealplanning'])->middleware(['auth', 'verified'])->name('trainer.meal.planning');
Route::post('/trainer/meal/store', [TrainerController::class, 'storemealplan'])->middleware(['auth', 'verified'])->name('trainer.meal.store');
Route::get('trainer/meal/destroy', [TrainerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('trainer.meal.destroy');
//----------------trainer routes ends  here-----------------------//


//-------------------------admin routes----------------------//
Route::get('/trainer/activation/accept/{id}', [ActivationController::class, 'activationAccept'])->middleware(['auth', 'verified'])->name('activate');
Route::get('/trainer/activation/cancel/{id}', [ActivationController::class, 'activationCancel'])->middleware(['auth', 'verified'])->name('cancel');
Route::get('admin/settings/promotion', [AdminController::class, 'trainerPromotion'])->middleware(['auth', 'verified'])->name('admin.user.promotion');
Route::get('admin/trainer/activation/requests', [TrainerController::class, 'activation_request'])->middleware(['auth', 'verified'])->name('trainer.request');
Route::get('admin/calendar/schedule', [AdminController::class, 'schedule'])->middleware(['auth', 'verified'])->name('admin.calendar_schedule');

//------------------stripe payment intergration----------------------------//

Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/test', [StripeController::class, 'test'])->name('test');
Route::post('/live', [StripeController::class, 'live'])->name('live');
Route::get('/success', [StripeController::class, 'success'])->name('success');















require __DIR__ . '/auth.php';
