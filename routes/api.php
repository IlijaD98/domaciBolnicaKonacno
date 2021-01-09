<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('medicine',[MedicineController::class,'medicine']);
Route::get('medicine/{id}',[MedicineController::class,'medicineById']);
Route::post('medicine',[MedicineController::class,'medicineSave']);
Route::put('medicine/{id}',[MedicineController::class,'medicineUpdate']);
Route::delete('medicine/{id}',[MedicineController::class,'medicineDelete']);
