<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Members\MembersController;

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

Route::get('system', [AuthenticationController::class,'signin'])->name('login');
Route::post('login', [AuthenticationController::class,'login']);


Route::group([], function () {
// Route::middleware('auth:sanctum')->group( function () {
    
    Route::controller(AuthenticationController::class)->group(function (){
        Route::get('logout', 'logout');
    });
    
    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });
    
    Route::controller(MembersController::class)->group(function (){
        Route::get('members', 'index')->name('members.index');
    });
});


Route::namespace('App\Http\Controllers\Home')->group(function () {
    Route::get('/', 'homeController@index');
    Route::get('/register/{isReg}', 'homeController@register');
    Route::get('/billPdf/{reg_no}', 'homeController@Billpdf');
});

// Route::get('/send-mail/{slug}',[homeController::class,'mailingUser'])->name('mailingUser');
Route::post('/process-regno', [homeController::class, 'processRegistrationNumber'])->name('process.regno');
Route::get('/memberDetails/{reg_no}', [homeController::class, 'memberDetails'])->name('memberDetails');
Route::post('/memberDetails/process-bill/', [homeController::class, 'generateBill'])->name('generateBill');
Route::post('/memberDetails/process-bill-gepg/', [homeController::class, 'generateBillGepg'])->name('generateBillGepg');
Route::post('/memberDetails/check-control-no/', [homeController::class, 'checkControlNo'])->name('checkControlNo');

Route::post('/submitRegForm', [homeController::class, 'submitRegForm'])->name('submitRegForm');
Route::post('/districts', [homeController::class, 'districts'])->name('districts');
Route::post('/wards', [homeController::class, 'wards'])->name('wards');
//==================================================================

Route::get('/guide-to-register', function(){
    return view('howToRegister');
})->name('guideToRegister');



