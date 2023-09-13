<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\homeController;

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


Route::namespace('App\Http\Controllers\Home')->group(function () {
    Route::get('/', 'homeController@index');
    Route::get('/register/{isReg}', 'homeController@register');
});

Route::get('/send-mail/{slug}',[homeController::class,'mailingUser']);
Route::post('/process-regno', [homeController::class, 'processRegistrationNumber'])->name('process.regno');
Route::get('/memberDetails/{reg_no}', [homeController::class, 'memberDetails'])->name('memberDetails');
Route::post('/memberDetails/process-bill/', [homeController::class, 'generateBill'])->name('generateBill');

Route::post('/submitRegForm', [homeController::class, 'submitRegForm'])->name('submitRegForm');
Route::post('/districts', [homeController::class, 'districts'])->name('districts');
Route::post('/wards', [homeController::class, 'wards'])->name('wards');

