<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dashbard routes

Route::prefix('/dashboard')->middleware(['auth'])->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.home');
    Route::get('/patients',[DashboardController::class,'patients'])->name('dashboard.patients');
    Route::get('/all-patients',[DashboardController::class,'allpatients'])->name('dashboard.allpatients');
    Route::get('/patients/to-be-traced',[DashboardController::class,'tobetraced'])->name('dashboard.tobetraced');
    Route::get('/patients/traced',[DashboardController::class,'traced'])->name('dashboard.traced');

    Route::prefix('/patient')->middleware(['auth'])->group(function(){
        Route::post('/',[PatientController::class,'store'])->name('patient.store');

    });

});