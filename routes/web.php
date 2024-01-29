<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonemasterController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ErtmemberController;
use App\Http\Controllers\ReportsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

  Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';


Route::get('/zonemaster', [ZonemasterController::class, 'index'])->name('zonemaster.index');
Route::get('/create_zonemaster', [ZonemasterController::class, 'create'])->name('create_zonemaster');
Route::get('/edit_zonemaster', [ZonemasterController::class, 'edit'])->name('zonemaster.edit');
Route::get('/view_zonemaster', [ZonemasterController::class, 'view'])->name('zonemaster.view');
Route::post('/zone_store', [ZonemasterController::class, 'store'])->name('zonemaster.store');
Route::delete('/delete_zonemaster/{id}', 'ZoneMasterController@destroy')->name('zonemaster.delete');
 


Route::get('/specialization', [SpecializationController::class, 'index'])->name('specialization');
Route::get('/add_specialization', [SpecializationController::class, 'create'])->name('specialization.add');
Route::get('/edit_specialization', [SpecializationController::class, 'edit'])->name('specialization.edit');

Route::get('/ert_members', [ErtmemberController::class, 'index'])->name('ert.members');
Route::get('/add_ertmembers', [ErtmemberController::class, 'create'])->name('add.ertmembers');
Route::get('/edit_ertmembers', [ErtmemberController::class, 'edit'])->name('edit.ertmembers');
Route::get('/view_ertmembers', [ErtmemberController::class, 'view'])->name('view.ertmembers');

Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
Route::get('/create_reports', [ReportsController::class, 'create'])->name('reports.create');
 

