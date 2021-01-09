<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/register",[AdminController::class,'register']);
Route::post("/login",[AdminController::class,'login']);
Route::get("/",[HomeController::class,'index']);
Route::get("/detail/{id}",[HomeController::class,'detail']);
Route::get("/patient",[PatientController::class,'index']);
Route::get("/doctor",[DoctorController::class,'index']);



