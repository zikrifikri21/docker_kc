<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('login', [LoginController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('guest');

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('daftar', [DaftarController::class, 'store']);

Route::get('/dashboard', [DashboardUser::class, 'index'])->middleware('auth');
Route::get('/profile-user', [DashboardUser::class, 'profile'])->middleware('auth');



Route::get('superadmin', function () { return view('superadmin'); })->middleware('checkRole:superadmin');
Route::get('admin', function () { return view('admin'); })->middleware(['checkRole:admin,superadmin']);
Route::get('user', function () { return view('user'); })->middleware(['checkRole:user,admin']);
