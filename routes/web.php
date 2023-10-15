<?php

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManajemenController;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('dashboard', function () {
        return view('dashboard.dashboard-index');
    })->name('dashboard');

    Route::get('pengaduan',[PengaduanController::class,'index'])->name('pengaduan');
    Route::get('pengaduan/create',[PengaduanController::class,'create'])->name('pengaduan.create');
    Route::post('pengaduan/store',[PengaduanController::class,'store'])->name('pengaduan.store');
    Route::get('pengaduan/edit/{id}',[PengaduanController::class,'edit'])->name('pengaduan.edit');
    Route::post('pengaduan/update/{id}',[PengaduanController::class,'update'])->name('pengaduan.update');
    Route::get('pengaduan/destroy/{id}',[PengaduanController::class,'destroy'])->name('pengaduan.destroy');

    Route::get('user',[UserManajemenController::class,'index'])->name('user');
    Route::get('user/create',[UserManajemenController::class,'create'])->name('user.create');
    Route::post('user/store',[UserManajemenController::class,'store'])->name('user.store');
    Route::get('user/edit/{id}',[UserManajemenController::class,'edit'])->name('user.edit');
    Route::post('user/update/{id}',[UserManajemenController::class,'update'])->name('user.update');
    Route::get('user/destroy/{id}',[UserManajemenController::class,'destroy'])->name('user.destroy');




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
