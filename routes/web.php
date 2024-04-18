<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ResarvationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VoitureController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('services')->name('services.')->group(function(){

    Route::get('/',[ServiceController::class,'index'] )->name('index') ;
        
    
    Route::get('/edit', [ServiceController::class,'edit'])->name('edit');

    

});
Route::prefix('voitures')->name('voitures.')->group(function(){
    Route::get('show/{voiture}', [VoitureController::class,'show'])->name('show');
    Route::get('/{voiture}/edit', [VoitureController::class,'edit'])->name('edit');
    Route::get('/', [VoitureController::class,'index'])->name('index');
    Route::put('/{voiture}', [VoitureController::class,'update'])->name('update');
    Route::get('/create', [VoitureController::class,'create'])->name('create');
    Route::post('/', [VoitureController::class,'store'])->name('store');
    Route::get('destroy/{voiture}', [VoitureController::class,'destroy'])->name('destroy');
});
Route::resource('clients',ClientController::class);
Route::resource('Reservations',ResarvationController::class);
Route::get('clients/destroy/{id}',[ClientController::class,'destroy'])->name('destroy');
