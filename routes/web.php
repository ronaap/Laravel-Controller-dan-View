<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampusController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\ProfileController;


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
    return view('hello');
});

route::get('/landing', [LandingController::class, 'index']);

route::get('/landing/profile', [ProfileController::class, 'index']);


// TUGAS
route::get('/home', [HomeController::class, 'index']);
route::get('/profil', [profilController::class, 'index']);
route::get('/kampus', [KampusController::class, 'index']);
