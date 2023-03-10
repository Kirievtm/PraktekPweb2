<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemasukanController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('spica.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::get('/logout', [LoginController::class, 'logout']);

route::get('/dashboard', [DashboardController::class, 'tampil'])->middleware(['auth','verified']);

route::get('/pemasukan',[PemasukanController::class,'index'])->middleware(['auth','verified']);
//route::get('/pemasukan',[PemasukanController::class,'home'])->middleware(['auth','verified']);
route::get('/pemasukan/create',[PemasukanController::class,'create'])->middleware(['auth','verified']);
route::post('/pemasukan/store',[PemasukanController::class,'store'])->middleware(['auth','verified']);
route::post('/pemasukan/store',[PemasukanController::class,'store'])->middleware(['auth','verified']);
route::get('/dashboard/{id_pemasukan}/edit',[DashboardController::class,'edit'])->middleware(['auth','verified']);
route::put('/dashboard/{id_pemasukan}/edit',[DashboardController::class,'update']);
route::delete('/dashboard/{id_pemasukan}',[DashboardController::class,'delete'])->middleware(['auth','verified']);
require __DIR__.'/auth.php';