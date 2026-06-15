<?php

use Illuminate\Support\Facades\Route;

/*
use App\Http\Controllers\ApprenticesController;
Route::get('Apprentice/create',[ApprenticesController::class,'create']);
Route::post('Apprentice/store',[ApprenticesController::class,'store'])->name('Apprentices.store');
*/

/*
use App\Http\Controllers\AreasController;
Route::get('Area/create',[AreasController::class,'create']);
Route::post('Area/store',[AreasController::class,'store'])->name('Areas.store');
*/
use App\Http\Controllers\TrainingCentersController;
Route::get('TrainingCenter/create', [TrainingCentersController::class, 'create']);
Route::post('TrainingCenter/store', [TrainingCentersController::class, 'store'])->name('TrainingCenters.store');

use App\Http\Controllers\ComputersController;
Route::get('Computer/create', [ComputersController::class, 'create']);
Route::post('Computer/store', [ComputersController::class, 'store'])->name('Computers.store');
