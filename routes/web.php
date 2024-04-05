<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreparationController;
use App\Http\Controllers\MasterdpsController;
use App\Http\Controllers\MasterfishsizeController;
use App\Models\Masterdps;
use App\Models\Masterfishsize;

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

//Export excel
Route::get('/exportexcelprep',[PreparationController::class,'exportexcelprep'])->name('exportexcelprep');

//MASTER DATA/masterdps
Route::get('/masterdps',[MasterdpsController::class,'index'])->name('masterdps');
//MASTER DATA/masterdps-edit
Route::get('/tampilkandps/{tag_rfid}',[MasterdpsController::class,'tampilkandps'])->name('tampilkandps');
Route::post('/updatedps/{tag_rfid}',[MasterdpsController::class,'updatedps'])->name('updatedps');


//MASTER DATA/masterfishsize
Route::get('/masterfishsize',[MasterfishsizeController::class,'index'])->name('masterfishsize');
//MASTER DATA/masterfishsize-tambah (tidak jadi di pakai karna ada masalah di database perihal primary key dan auto increment)
Route::get('/tambahdatamasterfishsize',[MasterfishsizeController::class,'tambahdatamasterfishsize'])->name('tambahdatafishsize');
Route::post('/insertdatamasterfishsize',[MasterfishsizeController::class,'insertdatamasterfishsize'])->name('insertdatamasterfishsize');