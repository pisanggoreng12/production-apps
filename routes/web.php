<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreparationController;

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
    return view('welcome');
});

Route::get('/preparation',[PreparationController::class,'index'])->name('preparation');

Route::get('/tambahdataprep',[PreparationController::class,'tambahdataprep'])->name('tambahdataprep');
Route::post('/insertdataprep',[PreparationController::class,'insertdataprep'])->name('insertdataprep');

Route::get('/tampilkandataprep/{productionid}',[PreparationController::class,'tampilkandataprep'])->name('tampilkandataprep');
Route::post('/updatedataprep/{productionid}',[PreparationController::class,'updatedataprep'])->name('updatedataprep');

Route::get('/deletedataprep/{productionid}',[PreparationController::class,'deletedataprep'])->name('deletedataprep');

//Export pdf
Route::get('/exportpdfprep',[PreparationController::class,'exportpdfprep'])->name('exportpdfprep');
