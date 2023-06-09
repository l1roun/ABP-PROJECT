<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PromotionController;

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

Route::get('/',[RouteController::class,'index'])->name('page.index');
Route::get('dashboard',[RouteController::class,'dashboard'])->name('page.dashboard');
Route::get('formations',[RouteController::class,'formations'])->name('page.formations');


Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('/enrollments/{courseId}',[EnrollmentController::class,'show'])->name('enrollments.index');
Route::post('/enrollments/{id}/payee', [EnrollmentController::class,'payee'])->name('enrollments.payee');
Route::post('/enrollments/{id}/present', [EnrollmentController::class,'present'])->name('enrollments.present');







Route::post('/formation', [FormationController::class, 'store'])->name('formation.store');



Route::get('/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('students.delete');
Route::post('/multi-delete', [StudentController::class, 'multiDelete'])->name('posts.multi-delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('posts.edit');






Route::get('promotions',[RouteController::class,'promotions'])->name('page.promotions');
Route::post('/promotions', [PromotionController::class, 'store'])->name('promotions.store');

Route::get('fincances',[RouteController::class,'finances'])->name('page.finances');
Route::get('dashboard/math',[RouteController::class,'math'])->name('page.math');
Route::get('dashboard/educationfinanciere',[RouteController::class,'education'])->name('page.education');




Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');
