<?php

use App\Http\Controllers\Guests\TrainController;
use Illuminate\Support\Facades\Route;

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
    return view('guests.home');
});

Route::get('/trains/today', [TrainController::class, 'index'])->name('guests.trains.today');
Route::get('/trains/tomorrow', [TrainController::class, 'tomorrow'])->name('guests.trains.tomorrow');

Route::get('/trains/{train}', [TrainController::class, 'show'])->name('guests.trains.show');